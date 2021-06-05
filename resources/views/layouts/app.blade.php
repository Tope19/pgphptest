<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body class="is-preload">
    <div id="wrapper">
        @guest
            @else
            <a href="{{ route('logout') }}">Logout</a>
        @endguest

        <section id="main">
            @yield('content')
        </section>
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Pictureworks</li>
            </ul>
        </footer>


    </div>
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>
</body>
</html>
