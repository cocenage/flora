<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    public static function getNavigationLabel(): string
    {
        return 'Новости';
    }
    public static function getPluralLabel(): string
    {
        return 'Новости';
    }
    public static function getNavigationGroup(): string
    {
        return 'Контент';
    }

    protected static ?string $modelLabel = 'Новости';
    protected static ?string $pluralModelLabel = 'Новости';
    protected static ?string $recordTitleAttribute = "name";
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Tabs::make('Основная информация')->tabs([
                        Tabs\Tab::make('Основная информация')->schema([
                            Grid::make(2)
                                ->columns([
                                    'sm' => 1,
                                    'xl' => 2,
                                ])
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Название записи')

                                        ->maxLength(255)
                                        ->live()
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                        ->required(),
                                    TextInput::make('slug')
                                        ->label('URL-адрес (автоматически формируется)')
                                        ->disabled()
                                        ->maxLength(255)
                                        ->dehydrated()
                                        ->unique(Blog::class, 'slug', ignoreRecord: true)

                                        ->required(),
                                ]),
                                  TextInput::make('title')
                                        ->label('Короткое описание записи')

                                        ->maxLength(255)
                                      ->required()
                                       ->columnSpan(2),
                            RichEditor::make('description')
                                ->label('Контент')

                                ->required()
                                ->columnSpan(2),
                            FileUpload::make('image')
                                ->image()
                                ->label('Изображение записи')
                                ->directory('categories')
                                ->required()
                                ->columnSpan(2),
                        ]),
                        Tabs\Tab::make('Meta-поля')->schema([
                            TextInput::make('meta_title')
                                ->label('Meta-заголовок (SEO)')
                                ->placeholder('Консультации в ветеринарной клинике Neovet — Заботьтесь о здоровье ваших питомцев!')
                                ->required(),
                            TextInput::make('meta_keywords')
                                ->label('Ключевые слова для поисковых систем')

                                ->placeholder('ветеринарные консультации, Neovet, ветеринарная клиника, здоровье животных, уход за питомцами, лечение животных, советы ветеринара')
                                ->required(),
                            Textarea::make('meta_description')
                                ->label('Описание для поисковых систем')

                                ->placeholder('Запишитесь на консультацию в ветеринарной клинике Neovet! Наши опытные ветеринары готовы предоставить профессиональные советы и помощь в заботе о здоровье ваших любимцев!')
                                ->required(),
                        ]),
                    ])->columnSpanFull(),

                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Статус записи')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                    ])->columnSpanFull(),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Название записи')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Статус')
                    ->sortable()
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
            'title',
        ];
    }

}
