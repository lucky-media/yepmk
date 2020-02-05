<!DOCTYPE html>
<html lang="en">

<head>
    {{--  Css  --}}
    <link href="https://fonts.googleapis.com/css?family=Archivo:500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <script src="{{ mix('js/turbolinks.js', 'assets/build') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->siteDescription }}">

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



    {{--  Analytics  --}}
    @if ($page->production)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-36311389-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-36311389-2');
    </script>
    @endif

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

    <div id="cookieContainer" class="hidden sticky bottom-0 w-full z-20 py-6 bg-yellow-500">
        <div class="container">
            <div class="row items-center justify-center">
                <div class="md:col-8 flex flex-col md:flex-row">
                    <div class="mb-4 md:mr-6">
                        <img class="w-20 h-auto" src="/assets/images/cookie.png" srcset="/assets/images/cookie@2x.png"
                            alt="">
                    </div>
                    <div class="flex flex-col text-gray-900">
                        <h4 class="font-bold">This website uses cookies.</h4>
                        <p class="font-normal text-sm mt-1">We use cookies to
                            ensure that we give you the best experience on our
                            website and to analyse our traffic using Google
                            Analytics.
                        </p>
                    </div>
                </div>
                <div class="mt-4 md:mt-0 md:col-4">
                    <button id="cookieClose"
                        class="transition font-bold text-gray-900 border border-purple-500 hover:bg-purple-500 hover:text-white px-4 py-2 button">
                        I Agree
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>