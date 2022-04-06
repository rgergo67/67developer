@env('production')
    <link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google-analytics.id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('services.google-analytics.id') }}');
    </script>
@endenv
