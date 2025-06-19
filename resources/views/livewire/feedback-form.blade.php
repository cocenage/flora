<div class="w-full h-full mx-auto p-6 text-white">
    <h2 class="text-[30px] lg:text-[40px] mb-[20px] lg:mb-[40px] text-center">Свяжитесь с нами</h2>

    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @error('form')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ $message }}
        </div>
    @enderror

    <form class="flex flex-col justify-center items-center" wire:submit.prevent="submit">
        <!-- Скрытое honeypot-поле -->
        <input type="text" name="website" wire:model="honeypot" style="display: none;">

<div class="w-full mb-4">
    <input
        wire:model="phone"
        type="tel"
        placeholder="Номер телефона"
        class="w-full px-6 py-4 border-2 rounded-full focus:outline-none"
         wire:model.defer="phone"
                            id="phone"
    >
    @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

        <!-- Остальные поля формы -->
        <div class="w-full mb-4">
            <input
                wire:model="email"
                type="email"
                placeholder="Email"
                class="w-full px-6 py-4 border-2 rounded-full focus:outline-none  "
            >
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="w-full ">
            <textarea
                wire:model="message"
                placeholder="Your message"
                rows="4"
                class="w-full px-6 py-4 border-2 text-white rounded-[30px] focus:outline-none  "
            ></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>


                <button   type="submit"
    class="mt-[32px] btn btn--primary relative inline-flex rounded-full items-center justify-center overflow-hidden px-[40px] py-[12.5px] bg-[#fff] text-black font-medium transition-all duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group">
            <span class="text-[14px] relative z-10 transition-colors duration-200 group-hover:text-[#fff]">Отправить</span>

            <!-- Анимированный фон -->
            <span class="absolute inset-0 bg-black transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-[cubic-bezier(.77,.14,.11,.88)] group-hover:blur-[1px]"></span>
        </button>

    </form>
</div>
