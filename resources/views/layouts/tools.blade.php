<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="scroll-smooth h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @sectionMissing('seo')
        <x-seo />
    @endif

    @yield('seo')

    <link rel="preconnect" href="https://rsms.me/inter/inter.css" crossorigin>
    <link rel="preload" as="style" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://rsms.me/inter/inter.css">
    <noscript>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    </noscript>

    <meta name="robots" content="noindex, nofollow" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('header-css')
    <x-google-analytics />
    <x-google-ads />
</head>
<body class="antialiased font-sans bg-gray-100 h-full">

    {{ $slot }}

    <x-footer />
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('footer-scripts')
</body>
</html>
