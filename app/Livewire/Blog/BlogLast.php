<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogLast extends Component
{
    public $currentSlug; // Слаг текущей статьи

    public function mount($currentSlug)
    {
        $this->currentSlug = $currentSlug;
    }

    public function render()
    {
        // Получаем новые статьи, исключая текущую
        $relatedNews = Blog::where('is_active', 1)
            ->where('slug', '!=', $this->currentSlug) // Исключаем текущую статью
            ->take(3) // Ограничиваем количество статей
            ->get();

        return view('livewire.blog.blog-last', [
            'relatedNews' => $relatedNews,
        ]);
    }
}
