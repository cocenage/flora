
@push('meta')
<title>{{ $meta_title }} Flora в Вогоград</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
@endpush


<section class="bg-[#f0efed] py-[15px] px-[15px] lg:py-[50px] lg:px-[250px]">



        <!-- Заголовок статьи -->
        <!-- <h2 class="text-[30px] lg:text-[40px] mb-[20px] lg:mb-[40px]">{{ $blog->name }}</h2> -->

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-[30px]">

        <div class="col-span-1 flex flex-col">
            <h2 class="text-[30px] lg:text-[40px] mb-[20px] lg:mb-[40px]">{{ $blog->name }}</h2>


        </div>

        <div class="col-span-1">
            <img src="{{ asset('storage/' . $image) }}" alt="Основательница магазина за созданием букета"
                 class="shrink-animation w-full h-full max-h-[700px] object-cover ">
        </div>
    </div>
    <div class="flex w-full items-center justify-center">
      <div class="prose max-w-none text-[20px]">
    {!! $blog->description !!}
</div>
    </div>



    <div class="">

        <livewire:blog.blog-last :currentSlug="$blog->slug" />
    </div>
</section>


