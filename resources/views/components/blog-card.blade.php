@props(['data'])

<div class="">
    <a wire:navigate href="{{ route('single.blog', $data->slug) }}">



        <div href="#" class="relative block overflow-hidden group">
            <img
                src="{{ asset('storage/' . $data->image) }}"
                alt="img"
                class="shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5] pt-[20px] object-cover">

        </div>

        <p class="text-[22px] pt-[20px]">{{ $data->name }}</p>
        <p class="text-[16px]">{{ $data->title }}</p>

    </a>
    <a wire:navigate href="{{ route('single.blog', $data->slug) }}" class="pt-[10px] group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
        <span class="relative z-10 text-[14px] ">Подробней</span>
        <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
    </a>
</div>
