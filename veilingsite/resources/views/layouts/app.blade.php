<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>

    <script>
        if(navigator.userAgent.indexOf("Speed Insights") == -1) {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-68616424-7', 'auto');
            ga('send', 'pageview');
        }
    </script>

    <meta name="google-site-verification" content="ZaFsvkTeS7woY0uD7ZYCpMCxNlu3PDeQgmr0BAR1KDY" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo')

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="none" onload="if(media!='all')media='all'">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sass/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css-foundation/foundation.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>

</body>
</html>
