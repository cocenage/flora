@push('meta')
<title>{{ 'Свежие цветы в Волгограде – Flora | Натуральные и долгостоящие букеты' }}</title>
<meta name="description" content="Магазин цветов Flora в Волгограде – свежие букеты, авторские композиции и быстрая доставка до двери. Более 1000 вариантов роз, тюльпанов, пионов и экзотических цветов. Создадим идеальный подарок за 2 часа!">
<meta name="keywords" content="купить цветы в Волгограде, доставка цветов Волгоград, цветочный магазин Волгоград, заказать букет с доставкой, свежие цветы Волгоград, букеты на 8 Марта Волгоград, цветы на день рождения, свадебные букеты, розы в Волгограде, цветы в коробке, композиции из цветов, цветы на юбилей, доставка цветов сегодня, круглосуточная доставка, тюльпаны в Волгограде, пионы, недорогие букеты, экзотические цветы, цветы в Красноармейском районе">
<meta name="robots" content="index, follow">
@endpush

<section>
    <div class="py-[30px] lg:py-[50px] flex flex-col items-center justify-center">

        <h1 class="text-[30px] lg:text-[50px] mt-[16px] underline decoration-1 lg:decoration-3 underline-offset-8 text-center">Flora – язык ваших чувств!</h1>



        <p data-aos="fade-up"
            data-aos-delay="200" class="18px mt-[12px] text-center max-w-[600px]  px-[10px]">Flora – свежие эмоции в каждом букете. Идеальные цветы для любого повода с быстрой доставкой по Волгограду. Дарите радость просто!</p>
    </div>
    <!-- <div class="lg:grid lg:grid-cols-3 gap-[10px] px-[10px]">
        <div class="col-span-1">
            <a href="#" class="relative block overflow-hidden group">
                <img
                    src="{{ asset('images/base.webp') }}"
                    alt="img"
                    class="w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                <span class="absolute inset-0 flex items-center justify-center text-[40px] text-white">
                    Текст
                </span>
            </a>

        </div>
         <div class="col-span-1">
            <a href="#" class="relative block overflow-hidden group">
                <img
                    src="{{ asset('images/base.webp') }}"
                    alt="img"
                    class="w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                <span class="absolute inset-0 flex items-center justify-center text-[40px] text-white">
                    Текст
                </span>
            </a>

        </div>
         <div class="col-span-1">
            <a href="#" class="relative block overflow-hidden group">
                <img
                    src="{{ asset('images/base.webp') }}"
                    alt="img"
                    class="w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                <span class="absolute inset-0 flex items-center justify-center text-[40px] text-white">
                    Текст
                </span>
            </a>

        </div>
    </div> -->

    <div class="relative pb-[10px]">
        <!-- Контейнер для скролла -->
        <div class="flex overflow-x-auto space-x-[10px] mx-[10px] lg:space-x-0  snap-x snap-mandatory whitespace-nowrap py-4  lg:overflow-x-visible lg:grid lg:grid-cols-3 lg:gap-[10px] lg:whitespace-normal lg:py-0 ">
            <!-- Блок 1 -->
            <div class=" w-[80vw] flex-shrink-0 snap-start lg:w-auto lg:col-span-1">
                <a wire:navigate href="{{ route('page.products') }}" class="relative block overflow-hidden group whitespace-normal">
                    <img
                        src="{{ asset('images/1233.webp') }}"
                        alt="img"
                        class=" bg-black shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                    <span class="absolute inset-0 flex items-center justify-center text-[30px] lg:text-[40px] text-white">
                        Розы
                    </span>
                </a>
            </div>

            <!-- Блок 2 -->
            <div class="w-[80vw] flex-shrink-0 snap-start lg:w-auto lg:col-span-1">
                <a wire:navigate href="{{ route('page.products') }}" class="relative block overflow-hidden group whitespace-normal">
                    <img
                        src="{{ asset('images/12333.webp') }}"
                        alt="img"
                        class="bg-black shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                    <span class="absolute inset-0 flex items-center justify-center text-[30px] lg:text-[40px] text-white">
                        Пионы
                    </span>
                </a>
            </div>

            <!-- Блок 3 -->
            <div class="w-[80vw] flex-shrink-0 snap-start lg:w-auto lg:col-span-1">
                <a wire:navigate href="{{ route('page.products') }}" class="relative block overflow-hidden group whitespace-normal">
                    <img
                        src="{{ asset('images/123333.webp') }}"
                        alt="img"
                        class="bg-black shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-[4/5]">
                    <span class="absolute inset-0 flex items-center justify-center text-[30px] lg:text-[40px] text-white">
                        Хризантемы
                    </span>
                </a>
            </div>
        </div>


    </div>





    <!-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-[10px] p-[10px] bg-black">

    <div class="col-span-1 p-[32px] bg-[#CAE3EF] relative block overflow-hidden group">
        <h2 class="text-[30px] lg:text-[40px] mb-[20px] lg:mb-[40px]">Экологичная флористика</h2>
        <p class="text-[20px]">Используем биоразлагаемую упаковку и экологичные методы выращивания. Заботимся о природе</p>
        <img src="{{ asset('images/21.webp') }}" alt="Эко-упаковка" class="shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-square object-cover">
    </div>

    <div class="col-span-1 p-[32px] bg-[#CAE3EF] relative block overflow-hidden group">
        <h2 class="text-[30px] lg:text-[40px] mb-[20px] lg:mb-[40px]">Мастера своего дела</h2>
        <p class="text-[20px]">Наши флористы с 10+ летним опытом создадут идеальную композицию специально для вас</p>
        <img src="{{ asset('images/22.webp') }}" alt="Доставка цветов" class="shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-square object-cover">
    </div>



    <div class="col-span-1 p-[32px] bg-[#CAE3EF] relative block overflow-hidden group">
        <h2 class="text-[40px] mb-[20px] lg:mb-[40px]">Персональный подход</h2>
        <p class="text-[20px]">Создаем букеты по вашему описанию. Поможем подобрать идеальный вариант для любого события</p>
        <img src="{{ asset('images/23.webp') }}" alt="Индивидуальный букет" class="shrink-animation w-full h-auto transition-transform duration-300 group-hover:scale-105 aspect-square object-cover">
    </div>

</div> -->
    <div class="bg-[#E69F60]">
        <div  class="py-[40px] px-[40px] lg:py-[50px] lg:px-[250px]">
            <div
                class="grid grid-cols-1 xl:grid-cols-3">
                <div class="col-span-2">
                    <h2 class="text-[30px] lg:text-[40px]">Как заказать цветы за 3 минуты</h2>
                    <p class="16px">Быстро, свежо и с персональной заботой</p>
                </div>
            </div>
            <div
                class="grid grid-cols-1 xl:grid-cols-3 gap-[15px] flex-col items-center justify-center pt-[24px]">
                <div class="col-span-1">
                    <h2 class="text-[40px] pb-[10px] font-medium">1</h2>
                    <p class="text-[20px] pb-[20px] font-medium">Позвоните нам <a href="tel:+7903225423" class="hover:underline">+7 (903) 22-54-23</a></p>
                    <p class="text-[16px] lg:w-[75%]">Наши флористы помогут выбрать идеальный букет и уточнят детали.</p>
                </div>
                <div class="col-span-1">
                    <h2 class="text-[40px] pb-[10px] font-medium">2</h2>
                    <p class="text-[20px] pb-[20px] font-medium">Оформите заказ</p>
                    <p class="text-[16px] lg:w-[75%]">Все нюансы учтём сразу – вам останется только ждать восторга получателя!</p>
                </div>
                <div class="col-span-1">
                    <h2 class="text-[40px] pb-[10px] font-medium">3</h2>
                    <p class="text-[20px] pb-[20px] font-medium">Получите сюрприз</p>
                    <p class="text-[16px] lg:w-[75%]">Доставим свежие цветы точно в срок — с открыткой и вниманием к деталям!</p>
                </div>
            </div>
        </div>
    </div>
    <div
        class="bg-[#F5F3EB]">
        <div
            class="py-[40px] px-[40px] lg:py-[50px] lg:px-[250px]">
            <p class="text-[32px] mb-[40px]">Вопросы и ответы</p>
            <div class="w-full mx-auto">
                <div x-data="{ selected: null }">
                    <ul class="shadow-box">
                        <!-- Accordion Item 1 -->
                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 1}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Как быстро вы можете доставить букет?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 1 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container1"
                                x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Мы предлагаем доставку букетов в течение 2-х часов по Волгограду. В праздничные дни срок может увеличиться до 4 часов из-за высокой загрузки. Вы также можете заказать доставку на конкретное время.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 2}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Можно ли заказать букет по индивидуальному дизайну?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 2 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2"
                                x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Да, наши флористы с радостью создадут для вас уникальный букет по вашему эскизу или описанию. Просто свяжитесь с нами за 1-2 дня до нужной даты, чтобы мы могли подобрать все необходимые цветы и материалы.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 3}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Какие способы оплаты вы принимаете?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 3 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container3"
                                x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Мы принимаем наличные при получении, банковские карты (Visa, Mastercard, Мир), а также онлайн-оплату через СБП, Яндекс.Кассу и другие платежные системы. Для юридических лиц возможен безналичный расчет с выставлением счета.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 4}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Как продлить свежесть цветов в букете?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 4 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container4"
                                x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Чтобы цветы дольше радовали своей красотой: 1) подрежьте стебли под углом 2) ежедневно меняйте воду 3) добавляйте специальный питательный раствор (мы даем его бесплатно с каждым букетом) 4) храните букет в прохладном месте, подальше от прямых солнечных лучей и фруктов.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 5}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 5 ? selected = 5 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Есть ли у вас подарочные сертификаты?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 5 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container5"
                                x-bind:style="selected == 5 ? 'max-height: ' + $refs.container5.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Да, мы предлагаем подарочные сертификаты номиналом от 1000 до 10000 рублей. Вы можете выбрать электронный сертификат (отправим на email) или красивый печатный вариант в конверте. Сертификат действует 1 год и может быть использован для покупки любых товаров в нашем магазине.
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="relative my-[25px]">
                            <div class="border-b border-gray-200" :class="{'border-gray-400': selected === 6}">
                                <button type="button" class="w-full text-left pb-4" @click="selected !== 6 ? selected = 6 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <div class="flex w-full justify-between items-center py-[20px]">
                                            <p class="text-[18px] font-medium">
                                                Можно ли вернуть или заменить букет?
                                            </p>
                                            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                :class="selected == 6 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                                <path d="m6 9 6 6 6-6" />
                                            </svg>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container6"
                                x-bind:style="selected == 6 ? 'max-height: ' + $refs.container6.scrollHeight + 'px' : ''">
                                <div class="pt-[18px]">
                                    <p class="text-[16px]">
                                        Согласно законодательству, живые цветы обмену и возврату не подлежат. Однако если вы получили поврежденный букет или он не соответствует описанию на сайте, мы обязательно заменим его или вернем деньги. Пожалуйста, сообщите нам о проблеме в течение 2 часов после получения, приложив фотографии.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <!-- Accordion Item 2 -->
                        <!-- <li class="relative bg-[#F7F7F7] rounded-[25px] my-[25px]">
                            <button type="button" class="w-full px-[25px] py-[35px] text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                <div class="flex items-center justify-between">
                                    <div class="flex gap-[15px] items-center">

                                        <svg class="" transform="rotate(0)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            :class="selected == 2 ? 'transform rotate-180 transition-transform duration-300' : 'transition-transform duration-300'" class="lucide-chevron-down">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                        <h3 class="text-[24px]">
                                            dsaadsdsasd
                                        </h3>
                                    </div>
                                    <h3 class="ico-plus"></h3>
                                </div>
                            </button>
                            <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container2"
                                x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                <div class="px-6 pb-6">
                                    <h5 class="text-[18px]">sfdsdfd
                                    </h5>
                                </div>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </div>
            <div class="flex w-full items-center justify-center mx-auto">
                <a href="#section-id" class="mt-[32px] btn btn--primary relative inline-flex rounded-full items-center justify-center overflow-hidden px-[40px] py-[12.5px] bg-none border-1 text-black font-medium transition-all duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group">
                    <span class="text-[14px] relative z-10 transition-colors duration-200 group-hover:text-white">Написать нам</span>

                    <!-- Анимированный фон -->
                    <span class="absolute inset-0 bg-black transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group-hover:blur-[1px]"></span>
                </a>
            </div>
        </div>
    </div>
</section>
