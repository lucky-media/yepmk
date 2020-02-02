<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->siteDescription }}" />
    <meta property="og:image" content="{{ $page->cover ? $page->cover : '/assets/images/favicons/meta.jpg' }}" />

    @stack('meta')

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    {{-- Links Generics --}}
    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/assets/images/favicons/fav-32.ico" sizes="32x32">
    <link rel="icon" href="/assets/images/favicons/fav-57.ico" sizes="57x57">
    <link rel="icon" href="/assets/images/favicons/fav-76.ico" sizes="76x76">
    <link rel="icon" href="/assets/images/favicons/fav-96.ico" sizes="96x96">
    <link rel="icon" href="/assets/images/favicons/fav-128.ico" sizes="128x128">
    <link rel="icon" href="/assets/images/favicons/fav-192.ico" sizes="192x192">
    <link rel="icon" href="/assets/images/favicons/fav-228.ico" sizes="228x228">

    {{-- Links Android --}}
    <link rel="shortcut icon" sizes="196x196" href=“/assets/images/favicons/fav-196.ico"> {{-- Links Apple --}} <link
        rel="apple-touch-icon" href="/assets/images/favicons/fav-120.ico" sizes="120x120">
    <link rel="apple-touch-icon" href="/assets/images/favicons/fav-152.ico" sizes="152x152">
    <link rel="apple-touch-icon" href="/assets/images/favicons/fav-180.ico" sizes="180x180">

    {{--  Css  --}}
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css?family=Archivo:500,700&display=swap" rel="stylesheet">

    {{-- Javascript --}}
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="antialiased font-sans text-black">
    <div id="app">
        @include('_partials.menu')

        @yield('body')

    </div>

    <footer>
        @include('_partials.footer')
    </footer>
</body>

</html>