<div class="mx-auto p-8 bg-white text-black rounded-2xl shadow-lg">
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-2">Заказать букет</h2>

    </div>

    @if(session()->has('message'))
        <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6 rounded">
            <p class="text-green-700">{{ session('message') }}</p>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6 text-black">
        <!-- Поле телефона -->
        <div x-data>
            <input
                x-mask="'+7 (999) 999-99-99'"
                wire:model="phone"
                type="tel"
                placeholder="+7 (___) ___-__-__"
                class="w-full px-5 py-3 border-0 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-400 transition-all duration-200 placeholder-gray-400"
            >
            @error('phone') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Поле email -->
        <div>
            <input
                wire:model="email"
                type="email"
                placeholder="Ваша почта"
                class="w-full px-5 py-3 border-0 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-400 transition-all duration-200 placeholder-gray-400"
            >
            @error('email') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Поле сообщения -->
        <div>
            <textarea
                wire:model="message"
                placeholder="Ваше сообщение"
                rows="4"
                class="w-full px-5 py-3 border-0 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-400 transition-all duration-200 placeholder-gray-400"
            ></textarea>
            @error('message') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- reCAPTCHA -->
        <div wire:ignore>
            <div id="g-recaptcha" class="g-recaptcha"></div>
            @error('recaptchaToken') <p class="mt-1 text-sm text-red-500">{{ $message }}</p> @enderror
        </div>

        <!-- Кнопка -->
        <button
            type="submit"
            class="w-full py-3 px-6 bg-black text-white font-medium rounded-lg hover:bg-gray-800 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2"
        >
            Заказать
        </button>
    </form>
</div>


