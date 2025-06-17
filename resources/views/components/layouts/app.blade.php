<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
</head>

<body>
    <livewire:partials.header />
    {{ $slot }}
    <livewire:partials.footer />
</body>

</html>
