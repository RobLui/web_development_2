<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('seo')

    <title>{{ config('app.name', 'Veilingsite') }}</title>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:100,600" >

    {{-- Custom css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('sass/custom.css') }}">

    {{-- Foundation --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css-foundation/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css-foundation/foundation.min.css') }}">

    {{--JQUERY--}}

    {{-- Font awesome --}}
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

{{--    <link rel="stylesheet" type="text/css" href="{{ asset('responsive-nav/responsive-nav.css') }}">--}}
{{--    <script src="{{ asset('responsive-nav/responsive-nav.js') }}"></script>--}}

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    {{--<script src="{{ asset('js/custom.min.js') }}"></script>--}}
    <script src="{{ asset('js/custom.js') }}"></script>
    {{--<script>--}}
        {{--// This will fire when document is ready:--}}
        {{--$(window).resize(function() {--}}
            {{--// This will fire each time the window is resized:--}}
            {{--if ($(window).width() < 1024) {--}}
                {{--var nav = responsiveNav(".nav-collapse");--}}
            {{--}--}}
            {{--if ($(window).width() > 1024) {--}}
                {{--var nav = responsiveNav().removeEvent('.nav-collapse');--}}
            {{--}--}}

        {{--}).resize(); // This will simulate a resize to trigger the initial run.--}}
    {{--</script>--}}
</body>
</html>
