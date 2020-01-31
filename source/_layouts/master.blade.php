<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link href="https://fonts.googleapis.com/css?family=Archivo:500,700&display=swap" rel="stylesheet">
</head>

<body class="antialiased font-sans text-black">
    <div id="app">
        @include('_partials.menu')

        @yield('body')

    </div>

    <footer>
        @include('_partials.footer')
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>

</html>