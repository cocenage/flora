<div x-show="cartOpen"
     @click.away="cartOpen = false"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 translate-y-4"
     x-transition:enter-end="opacity-100 translate-y-0"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 translate-y-0"
     x-transition:leave-end="opacity-0 translate-y-4"
     class="fixed bottom-4 right-4 bg-white p-6 rounded-xl shadow-xl z-50 w-96 max-h-[80vh] overflow-y-auto border border-gray-200"
     style="display: none;">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-xl font-bold text-gray-800">Ваша корзина</h3>
    <button @click="cartOpen = false" class="text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    @if(count($cart) > 0)
    <div class="divide-y divide-gray-200">
        @foreach($products as $product)
        <div class="py-4 flex items-center">
            <div class="flex-shrink-0 h-16 w-16 rounded-md overflow-hidden">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="h-full w-full object-cover">
                @else
                <div class="h-full w-full bg-gray-200 flex items-center justify-center">
                    <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                @endif
            </div>

            <div class="ml-4 flex-1">
                <div class="flex justify-between">
                    <h4 class="text-sm font-medium text-gray-900">{{ $product->name }}</h4>
                    <p class="ml-4 text-sm font-medium text-gray-900">
                        {{ number_format($product->price * $cart[$product->id], 0, ',', ' ') }} ₽
                    </p>
                </div>
                <div class="flex items-center mt-2">
                    <button wire:click="decrement({{ $product->id }})"
                        class="text-gray-500 hover:text-[#70B7F9] p-1">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                        </svg>
                    </button>
                    <span class="mx-2 text-gray-700">{{ $cart[$product->id] }}</span>
                    <button wire:click="increment({{ $product->id }})"
                        class="text-gray-500 hover:text-[#70B7F9] p-1">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                    <button wire:click="removeFromCart({{ $product->id }})"
                        class="ml-auto text-red-500 hover:text-red-700">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6 border-t border-gray-200 pt-4">
        <div class="flex justify-between text-base font-medium text-gray-900">
            <p>Итого:</p>
            <p>{{ number_format($total, 0, ',', ' ') }} ₽</p>
        </div>

        <div class="mt-4 space-y-3">
            <input wire:model="name"
                placeholder="Ваше имя"
                class="w-full px-4 py-2 border border-gray-300 rounded-md ">

   <div x-data="{ phoneMask: null }" x-init="phoneMask = IMask(document.getElementById('phone'), {
    mask: '+{7} (000) 000-00-00'
})">
    <input wire:model="phone"
           type="tel"
           placeholder="Телефон"
           wire:model.defer="phone"
           id="phone"
           class="w-full px-4 py-2 border border-gray-300 rounded-md">
</div>



            <button wire:click="checkout"
                class="w-full bg-[#70B7F9] text-white py-3 px-4  hover:bg-black transition-colors duration-200 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Оформить заказ
            </button>
        </div>
    </div>
    @else
    <div class="text-center py-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <h4 class="mt-4 text-lg font-medium text-gray-900">Корзина пуста</h4>
        <p class="mt-1 text-gray-500">Добавьте товары из каталога</p>
        <a href="{{ route('page.products') }}" class="mt-4 inline-block text-[#70B7F9] ">
            Перейти в каталог →
        </a>
    </div>
    @endif
</div>
