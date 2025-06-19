<div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[10px]">
        @forelse ($relatedNews as $index => $news)
        <div class="{{ $index >= 3 ? 'hidden sm:block' : '' }}">
            <x-blog-last-card :data="$news" :index="$index" />
        </div>
        @empty
        <p>Новостей нет</p>
        @endforelse
    </div>
</div>
