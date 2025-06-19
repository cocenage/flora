<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    public static function getNavigationLabel(): string
    {
        return 'Обратная связь';
    }
    public static function getPluralLabel(): string
    {
        return 'Обратная связь';
    }
    public static function getNavigationGroup(): string
    {
        return 'Контент';
    }
    protected static ?string $model = Feedback::class;
    protected static ?string $modelLabel = 'Обратная связь';
    protected static ?string $pluralModelLabel = 'Обратная связь';
    protected static ?string $recordTitleAttribute = "name";
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('phone'),
                TextInput::make('email'),
                Textarea::make('message')->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')
                    ->label('Телефон'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Почта'),
                Tables\Columns\TextColumn::make('message')->limit(50)

                ->label('Сообщение'),

                Tables\Columns\TextColumn::make('created_at')->dateTime()
                ->label('Дата написания')
                 ->sortable(),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return Feedback::count() === 0;
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
