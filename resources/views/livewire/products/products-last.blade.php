<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[10px]">
        @forelse ($relatedNews as $index => $news)
        <div class="{{ $index >= 3 ? 'hidden sm:block' : '' }}">
            <x-product-card-last :data="$news" :index="$index" />
        </div>
        @empty
        <p>Товаров нет</p>
        @endforelse
    </div>
</div>
