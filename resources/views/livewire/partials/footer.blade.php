<footer class="py-[15px] px-[15px] lg:py-[50px] lg:px-[250px] sticky top-0 bg-black text-white">
    <div class="mx-auto">
        <div class="flex  flex-col-reverse md:grid md:grid-cols-12 lg:grid-cols-12 gap-y-12 md:gap-x-8">


            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 col-span-1 md:col-span-7 lg:col-span-6 gap-y-12 sm:gap-x-8 md:gap-x-8 lg:gap-x-10">
                <div >
                    <h3 class="text-sm font-normal uppercase tracking-wide mb-5">Навигация</h3>
                    <ul class="space-y-3">
                        <li>

                            <a href="" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                                <span class="relative z-10 text-sm ">О нас</span>
                                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-white
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                            </a>
                        </li>
                        <li> <a href="" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                                <span class="relative z-10 text-sm ">Блог</span>
                                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-white
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                            </a></li>

                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-normal uppercase tracking-wide mb-5">Социальные сети</h3>
                    <ul class="space-y-3">
                        <li>
                            <a target="_blank" href="https://vk.com/club231052713" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                                <span class="relative z-10 text-sm ">Вконтакте</span>
                                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-white
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                            </a>

                        </li>
                        <li>
                            <a target="_blank" href="https://t.me/flora34vlg" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                                <span class="relative z-10 text-sm ">Телеграм</span>
                                <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-white
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="hidden md:block md:col-span-1 lg:hidden"></div>

            <div class="col-span-6 ">
                    <livewire:feedback-form />

            </div>
        </div>
        <div class="mt-16 pt-6">
            <div class=""></div>
            <div class="flex flex-row items-center justify-between">
                <div class="text-xs text-gray-100 flex gap-[5px]">
                    © 2025, Flora. <span class="hidden sm:block">Все права защищены.</span>
                </div>
                <div class="flex  md:mb-0">

                    <a href="" class="group relative inline-block cursor-pointer overflow-hidden" @click="mobileMenuOpen = false">
                        <span class="relative z-10 text-xs ">Политика конфедициальности</span>
                        <div class="
        absolute bottom-0 left-0 h-0.25 w-full bg-white
        transform -translate-x-full
        transition-transform duration-500 ease-in-out
        group-hover:translate-x-0 group-active:translate-x-0
    "></div>
                    </a>

                </div>

            </div>
        </div>
    </div>
</footer>
