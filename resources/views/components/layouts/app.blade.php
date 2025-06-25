<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ cartOpen: false }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Свежие цветы в Волгограде – Flora | Натуральные и долгостоящие букеты">
    <meta property="og:image" content="{{ asset('images/ogimage.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:logo" content="{{ asset('images/logo.svg') }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="author" content="SHKET Тимофей">
    <meta name="language" content="ru">
    @stack('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.4.3/imask.min.js"></script>
</head>

<body>
    <div x-data="{ showPreloader: true }"
        x-init="setTimeout(() => showPreloader = false, 500)"
        x-show="showPreloader"
        x-transition:leave="transition ease-out duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black z-[9999] flex items-center justify-center">
    </div>

    <livewire:partials.header />
    {{ $slot }}
    <livewire:cart />
    <livewire:partials.footer />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.4.3/imask.min.js"></script>
</body>

</html>
