<div class="">
    <div class="grid grid-cols-1  md:grid-cols-3 gap-[10px]">
        @forelse ($products as $index => $product)

            <x-product-card :data="$product" :index="$index" />

        @empty
        <p>продуктов нет</p>
        @endforelse
    </div>
</div>
