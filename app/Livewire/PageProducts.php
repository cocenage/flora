<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class PageProducts extends Component
{
    public $selectedCategories = [];
    public $minPrice;
    public $maxPrice;
    public $sortBy = 'default';
    public $perPage = 12;

    protected $queryString = [
        'selectedCategories' => ['except' => []],
        'minPrice' => ['except' => ''],
        'maxPrice' => ['except' => ''],
        'sortBy' => ['except' => 'default']
    ];

    public function mount()
    {
        $this->minPrice = Product::min('price');
        $this->maxPrice = Product::max('price');
    }

    public function render()
    {
        $products = Product::query()
            ->when($this->selectedCategories, function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->whereIn('categories.id', $this->selectedCategories);
                });
            })
            ->when($this->minPrice, function ($query) {
                $query->where('price', '>=', $this->minPrice);
            })
            ->when($this->maxPrice, function ($query) {
                $query->where('price', '<=', $this->maxPrice);
            })
            ->when($this->sortBy, function ($query) {
                switch ($this->sortBy) {
                    case 'price_asc':
                        $query->orderBy('price');
                        break;
                    case 'price_desc':
                        $query->orderByDesc('price');
                        break;
                    case 'newest':
                        $query->orderByDesc('created_at');
                        break;
                    default:
                        $query->orderBy('name');
                }
            })
            ->where('is_active', true)
            ->with('categories')
            ->paginate($this->perPage);

        $categories = Category::where('is_active', true)->get();

        return view('livewire.page-products', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function resetFilters()
    {
        $this->reset(['selectedCategories', 'minPrice', 'maxPrice', 'sortBy']);
    }
}
