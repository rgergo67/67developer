<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('67developer programozás') }}</title>
    <meta name="description" content="{{ __('Elavult, lassú, hibásan működő weboldalakat és rendszereket javítok, teszek ismét korszerűvé és villámgyorssá.') }}">

    <meta property="og:site_name" content="{{ __('67developer programozás') }}">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="article">

    <meta property="og:title" content="{{ __('67developer programozás') }}">
    <meta property="og:description" content="{{ __('Elavult, lassú, hibásan működő weboldalakat és rendszereket javítok, teszek ismét korszerűvé és villámgyorssá.') }}">
    <meta property="og:image" content="{{ asset('images/fb_cover.jpg') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="preconnect" href="https://rsms.me" crossorigin>
    <link rel="preload" as="style" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://rsms.me/inter/inter.css">
    <noscript>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    </noscript>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('template_linked_css')
</head>
<body>
    <div class="font-sans text-gray-900 antialiased">

    {{ $slot }}

    <script type="text/javascript" src="/js/app.js"></script>
    @stack('footer-scripts')
</body>
</html>
