<div class="">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-[10px]">
    @foreach ($blogs as $index => $blog)
    <div class="">
        <x-blog-card :data="$blog" />
    </div>
    @endforeach
    @if ($blogs->isEmpty())
    <h1>Записей нет</h1>
    @endif
</div>

<!-- Кастомизированная пагинация -->
@if ($blogs->hasPages())
<div class="mt-8 flex justify-center items-center space-x-2">
    <!-- Кнопка "Назад" -->
    @if ($blogs->onFirstPage())
    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
        &lt;
    </span>
    @else
    <a href="{{ $blogs->previousPageUrl() }}" class="px-3 py-1 rounded-full bg-white   text-gray-700 hover:bg-gray-50 transition">
        &lt;
    </a>
    @endif

    <!-- Номера страниц -->
    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
    @if ($page == $blogs->currentPage())
    <span class="px-3 py-1 rounded-full bg-black text-white">
        {{ $page }}
    </span>
    @else
    <a href="{{ $url }}" class="px-3 py-1 rounded-full bg-white   text-gray-700 hover:bg-gray-50 transition">
        {{ $page }}
    </a>
    @endif
    @endforeach

    <!-- Кнопка "Далее" -->
    @if ($blogs->hasMorePages())
    <a href="{{ $blogs->nextPageUrl() }}" class="px-3 py-1 rounded-full bg-white   text-gray-700 hover:bg-gray-50 transition">
        &gt;
    </a>
    @else
    <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-400 cursor-not-allowed">
        &gt;
    </span>
    @endif
</div>
@endif

</div>
