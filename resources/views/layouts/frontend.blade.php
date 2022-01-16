<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:site_name" content="Mancsmeg">
    <meta property="og:url" content="{{ request()->fullUrl() }}">
    <meta property="og:type" content="article">

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
