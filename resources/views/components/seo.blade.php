@section('seo')
    <title>{{ $title ?? __('Online eszközök | 67developer programozás') }}</title>

    <meta name="description" content="{{ $description ?? __('Elavult, lassú, hibásan működő weboldalakat és rendszereket javítok, teszek ismét korszerűvé és villámgyorssá.') }}">

    <meta property="og:title" content="{{ $title ?? __('Online eszközök | 67developer programozás') }}">
    <meta property="og:description" content="{{ $description ?? __('Elavult, lassú, hibásan működő weboldalakat és rendszereket javítok, teszek ismét korszerűvé és villámgyorssá.') }}">
    <meta property="og:image" content="{{ $image ?? asset('images/fb_cover.jpg') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
@endsection
