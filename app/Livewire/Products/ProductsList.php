<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Computed;

class ProductsList extends Component
{
    #[Computed()]
    public function products()
    {
        return Product::where('is_active', 1)
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.products.products-list', [
            'products' => $this->products(),
        ]);
    }
}
