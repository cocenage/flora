<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class Cart extends Component
{
    public $cart = [];
    public $name;
    public $phone;

protected $listeners = [
    'add-to-cart' => 'addToCart',
    'cartUpdated' => '$refresh'
];

public function addToCart($productId)
{
    $this->cart[$productId] = ($this->cart[$productId] ?? 0) + 1;
    $this->dispatch('cartUpdated');
}

    public function removeFromCart($productId)
    {
        unset($this->cart[$productId]);
    }

public function getCartCountProperty()
{
    return array_sum($this->cart);
}

public function checkout()
{
    $this->validate([
        'name' => 'required|min:3|max:50',
        'phone' => 'required|min:10|max:20|regex:/^[\d\s\-()+]+$/'
    ], [
        'phone.regex' => 'Некорректный формат телефона'
    ]);

    try {
        $order = Order::create([
            'items' => $this->prepareItemsForOrder(),
            'customer_name' => $this->name,
            'phone' => $this->phone,
            'status' => 'new'
        ]);

        $this->resetCart();
        $this->dispatch('notify', message: 'Заказ #'.$order->id.' успешно оформлен!');

    } catch (\Exception $e) {
        $this->dispatch('notify', message: 'Ошибка: '.$e->getMessage(), type: 'error');
    }
}

protected function prepareItemsForOrder()
{
    return collect($this->cart)->map(function ($qty, $id) {
        $product = Product::find($id);
        return [
            'product_id' => $id,
            'quantity' => $qty,
            'price' => $product->price,
            'name' => $product->name
        ];
    })->values()->toArray();
}

protected function resetCart()
{
    $this->cart = [];
    $this->name = '';
    $this->phone = '';
}
public function increment($productId)
{
    $this->cart[$productId]++;
}

public function decrement($productId)
{
    if ($this->cart[$productId] > 1) {
        $this->cart[$productId]--;
    } else {
        unset($this->cart[$productId]);
    }
}
    public function render()
    {
        $products = Product::whereIn('id', array_keys($this->cart))->get();
        $total = $products->sum(fn($p) => $p->price * ($this->cart[$p->id] ?? 0));

        return view('livewire.cart', [
            'products' => $products,
            'total' => $total,
                'cart' => $this->cart // Добавляем эту строку
        ]);
    }
}
