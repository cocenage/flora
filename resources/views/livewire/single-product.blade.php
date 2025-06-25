  @push('meta')
<title>{{ $meta_title }} Flora в Вогоград</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush
  <div class="py-[40px] px-[40px] lg:py-[50px] lg:px-[250px] bg-[#f0efed]">


        <!-- Основной контент -->
        <div class="   overflow-hidden">
            <div class="md:flex">
                <!-- Изображение товара -->
                <div class="md:w-1/2  flex items-center justify-center ">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}"
                             class="max-h-96 w-auto object-cover">
                    @else
                        <div class="h-64 w-full flex items-center justify-center bg-gray-100 rounded-lg">
                            <svg class="h-24 w-24 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                    @endif
                </div>

                <!-- Информация о товаре -->
                <div class="lg:pl-[20px] md:w-1/2 ">
                    <h1 class="product-title text-3xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h1>

                    <div class="flex items-center mb-6">
                        <div class="price text-2xl font-semibold text-[#70B7F9]">
                            {{ number_format($product->price, 0, '', ' ') }} ₽
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Описание</h3>
                        <div class="prose max-w-none text-gray-600">
                            {{ $product->description ?? 'Описание отсутствует' }}
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center space-x-4">
                             <button wire:click="$dispatch('add-to-cart', {productId: {{ $product->id }} })"
                        class="m-4 mt-0 bg-[#70B7F9] hover:bg-black text-black cursor-pointer hover:text-[#70B7F9] px-4 py-3 rounded-full font-medium transition-colors duration-300 flex items-center justify-center"
                        type="button">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        В корзину
                    </button>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <div class="flex items-center text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            Бесплатная доставка при заказе от 5 000 ₽
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <div class="pt-[40px]">

        <livewire:products.products-last :currentSlug="$product->slug" />
    </div>

    </div>
