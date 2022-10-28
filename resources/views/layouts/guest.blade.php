<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Jonathan Velazquez, diseñador y desarrollador web en Tijuana Baja California">
        <meta name="keywords" content="Jonathan Velazquez, desarrollador web, diseñador web, Tijuana, Baja California, páginas web, sitios web, aplicaciones web, software, apps, mi pagina web, fotografia, diseñó gráfico">
        <meta name="author" content="Jonathan Velazquez">
        <meta name="robots" content="index">
        <meta name="googlebot" content="index">
        <meta name="google" content="notranslate">

        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <!-- Here we need a header with livewire -->
            @livewire('website-header')
            {{ $slot }}
            @livewire('website-footer')
        </div>
    </body>
</html>
