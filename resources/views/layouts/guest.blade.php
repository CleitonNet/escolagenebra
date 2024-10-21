<!DOCTYPE html>
<html lang="pt-br">

<head>
    {{-- <meta name="description" content="Author: Cleiton dos Santos, Design: Dreyfus, Category: Site Escola Cristã, Length: 11 pages"> --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Uma escola que nasceu para glória de Deus.">

    <meta property="og:type" content="website" /> <!-- TIPO DE ARQUIVO -->
    <meta property="og:url" content="https://www.escolagenebra.com.br/" /> <!-- ENDEREÇO DO SITE -->
    <meta property="og:title" content="Escola Cristã Genebra" /> <!-- TITULO DO ARQUIVO -->
    <meta property="og:image" content="{{ asset('img/logo.webp') }}" /><!-- IMAGEM DE REFERENCIA DO SITE -->
    <meta property="og:description" content="Uma escola que nasceu para glória de Deus." /> <!-- DESCRIÇÃO DO SITE -->

    <link rel="icon" type="image/png" sizes="16x16"  href="{{ asset('img/favicon.webp') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title>@isset($page) {{ $page }} - @endisset {{ config('app.name', 'Escola Cristã Genebra :: Trilingue') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- @vite(['resources/css/guest/styles.css', 'resources/js/guest/scripts.js']) --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/styles-DKRi6DfH.css') }}">
    @stack('head')

    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

    <!-- Meta Pixel Code -->
    <script> ! function(f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '998240424750871'); fbq('track', 'PageView'); </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=998240424750871&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    @livewireStyles
</head>

<body class="font-sans scroll-smooth">
    <x-guest.navigation.navbar />

    {{ $slot }}

    <x-guest.whatsapp />
    <x-guest.footer />

    <script defer type="module" src="{{ asset('build/assets/scripts-Fv2M8weT.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>AOS.init();</script>
    @stack('footer')

    @livewireScripts
</body>
</html>
