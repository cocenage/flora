<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductsLast extends Component
{

    public $currentSlug; // Слаг текущей статьи

    public function mount($currentSlug)
    {
        $this->currentSlug = $currentSlug;
    }

    public function render()
    {
        // Получаем новые статьи, исключая текущую
        $relatedNews = Product::where('is_active', 1)
            ->where('slug', '!=', $this->currentSlug) // Исключаем текущую статью
            ->take(3) // Ограничиваем количество статей
            ->get();

        return view('livewire.products.products-last', [
            'relatedNews' => $relatedNews,
        ]);
    }
}
