<header x-data="{ scrolled: false, mobileMenuOpen: false }"
    x-on:scroll.window="scrolled = window.scrollY > 10"

    :class="{'shadow-md': scrolled}"
    class="py-[15px] px-[15px] lg:py-[25px] lg:px-[250px] sticky top-0 bg-[#F7F7B9] z-[100] transition-all duration-300 ease-out">

    <nav class="w-full flex justify-between items-center">


        <!-- Логотип -->
        <a href="/" wire:navigate>
            <img src="{{ asset('images/logo.svg') }}" alt="logo" class="h-[30px] lg:h-[40px]">
        </a>

        <!-- Бургер-меню (видно только на мобильных) -->
        <button @click="mobileMenuOpen = true" class="lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Основное меню (скрыто на мобильных) -->
        <div class="hidden lg:flex absolute left-1/2 transform -translate-x-1/2 gap-[15px]">
            <!-- Ваши ссылки меню -->
            <a href="" class="group relative inline-block cursor-pointer overflow-hidden">
                <span class="relative z-10 text-[14px] font-medium">О нас</span>
                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
            </a>
            <a href="" class="group relative inline-block cursor-pointer overflow-hidden">
                <span class="relative z-10 text-[14px] font-medium">Новости</span>
                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
            </a>
            <!-- Остальные ссылки -->
        </div>

        <!-- Кнопка (только на десктопе) -->
        <div class="hidden lg:block">
            <a href="#" class="btn btn--primary relative inline-flex rounded-full items-center justify-center overflow-hidden px-[40px] py-[12.5px] bg-[#70B7F9] text-black font-medium transition-all duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group">
                <span class="text-[14px] relative z-10 transition-colors duration-200 group-hover:text-[#70B7F9]">Создать букет</span>
                <span class="absolute inset-0 bg-black transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group-hover:blur-[1px]"></span>
            </a>
        </div>
    </nav>

    <!-- Мобильное меню (выдвигается слева) -->
    <div x-show="mobileMenuOpen"
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="-translate-x-full"
        class="max-h-screen fixed inset-y-0 left-0 w-full sm:w-[500px] bg-[#FFFFFF] z-[110] lg:hidden p-[15px]"
        @click.away="mobileMenuOpen = false">

        <div class="flex flex-col justify-between h-full">
            <div class="">
                <div class="w-full flex justify-between">
                    <!-- Логотип -->
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="h-[30px] lg:h-[40px]">

                    <!-- Кнопка закрытия -->
                    <button @click="mobileMenuOpen = false" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Ссылки меню для мобильных -->
                <div class="flex flex-col space-y-3 pt-[25px]">

                    <a href="" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                        <span class="relative z-10 text-[20px] ">О нас</span>
                        <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                    </a>
                    <a href="" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                        <span class="relative z-10 text-[20px] ">Новости</span>
                        <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-black
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                    </a>


                </div>
            </div>
            <div class="w-full">
                <a href="#" class="w-full btn btn--primary relative inline-flex rounded-full items-center justify-center overflow-hidden px-8 py-3 bg-[#70B7F9] text-black font-medium">
                    Создать букет
                </a>
                <div class="flex gap-[15px] w-full items-center justify-center pt-[20px]">
                    <a target="_blank" href="https://vk.com/club231052713">
                        <img src="{{ asset('images/Vector (5).svg') }}" class="w-6" alt="vk">
                    </a>
                    <a target="_blank" href="https://t.me/flora34vlg">
                        <img src="{{ asset('images/Vector (6).svg') }}" class="w-6" alt="tg">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Затемнение фона -->
    <div x-show="mobileMenuOpen"
        x-transition.opacity
        class="fixed inset-0 bg-black opacity-50 z-[105] lg:hidden"
        @click="mobileMenuOpen = false">
    </div>
</header>
