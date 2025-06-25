@props(['data', 'index'])


<div class="">
                   <div class="bg-white  border-gray-100 overflow-hidden  transition-all duration-300 flex flex-col h-full">
 <a wire:navigate href="{{ route('single.products', $data->slug) }}">
                            <div class="h-56 bg-gray-50 flex items-center justify-center relative">
                                @if($data->image)
                                <img src="{{ asset('storage/' . $data->image) }}"
                                    alt="{{ $data->name }}"
                                    class="absolute h-full w-full object-cover transition-transform duration-500 hover:scale-105">
                                @else
                                <svg class="h-16 w-16 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                @endif

                            </div>

                    <div class="p-4 flex-grow">
                        <h3 class="font-semibold text-lg mb-2 text-gray-800 hover:text-[#70B7F9] transition-colors">{{ $data->name }}</h3>
                        <div class="flex justify-between items-center mt-auto">
                            <span class="font-bold text-[#70B7F9] text-xl">
                                {{ number_format($data->price, 0, ',', ' ') }} ₽
                            </span>
                            @if($data->old_price)
                            <span class="text-sm text-gray-400 line-through">
                                {{ number_format($data->old_price, 0, ',', ' ') }} ₽
                            </span>
                            @endif
                        </div>
                    </div>
  </a>
                    <button wire:click="$dispatch('add-to-cart', {productId: {{ $data->id }} })"
                        class="m-4 mt-0 bg-[#70B7F9] hover:bg-black text-black cursor-pointer hover:text-[#70B7F9] px-4 py-3 rounded-full font-medium transition-colors duration-300 flex items-center justify-center"
                        type="button">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        В корзину
                    </button>
                </div>
</div>
