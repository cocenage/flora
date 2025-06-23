<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Фильтры -->
        <div class="md:w-1/4 bg-white p-4 rounded shadow">
            <h3 class="font-bold text-lg mb-4">Фильтры</h3>

            <!-- Категории -->
            <div class="mb-6">
                <h4 class="font-medium mb-2">Категории</h4>
                @foreach($categories as $category)
                <label class="flex items-center mb-1">
                    <input type="checkbox"
                        wire:model.live="selectedCategories"
                        value="{{ $category->id }}"
                        class="mr-2">
                    <span>{{ $category->name }}</span>
                </label>
                @endforeach
            </div>

            <!-- Цена -->
            <div class="mb-6">
                <h4 class="font-medium mb-2">Цена</h4>
                <div class="flex gap-2 mb-2">
                    <input type="number" wire:model.live.debounce.500ms="minPrice"
                        placeholder="От" class="border p-2 rounded w-1/2">
                    <input type="number" wire:model.live.debounce.500ms="maxPrice"
                        placeholder="До" class="border p-2 rounded w-1/2">
                </div>
            </div>

            <button wire:click="resetFilters"
                class="w-full bg-gray-200 hover:bg-gray-300 py-2 rounded">
                Сбросить фильтры
            </button>
        </div>

        <!-- Товары -->
        <div class="md:w-3/4">
            <!-- Сортировка -->
            <div class="bg-white p-4 rounded shadow mb-6">
                <select wire:model.live="sortBy" class="border p-2 rounded">
                    <option value="default">По умолчанию</option>
                    <option value="price_asc">Сначала дешевые</option>
                    <option value="price_desc">Сначала дорогие</option>
                    <option value="newest">Новинки</option>
                </select>
            </div>

            <!-- Список товаров -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
                    <a href="{{ route('page.products', $product->slug) }}" class="block">
                        <div class="h-48 bg-gray-100 flex items-center justify-center">
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="h-full w-full object-cover">
                            @else
                            <svg class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-1">{{ $product->name }}</h3>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-indigo-600">
                                    {{ number_format($product->price, 0, ',', ' ') }} ₽
                                </span>
                            </div>
                        </div>
                    </a>
                    <button wire:click="$dispatch('add-to-cart', {productId: {{ $product->id }} })"
                        class="w-full bg-indigo-600 text-white px-4 py-2 hover:bg-indigo-700"
                        type="button">
                        В корзину
                    </button>
                </div>
                @endforeach
            </div>

            <!-- Пагинация -->
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
