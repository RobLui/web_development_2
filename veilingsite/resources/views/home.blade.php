@extends('layouts.app')

{{--@section('seo')--}}

    {{--<meta name="description" content="Homepage Veilingsite" />--}}
    {{--<meta name="keywords" content="" />--}}
    {{--<meta name="author" content="Robbert Luit" />--}}
    {{--<meta name="publisher" content="Robbert Luit" />--}}
    {{--<meta name="robots" content="no-index" />--}}

    {{--<!-- TWITTER -->--}}
    {{--<meta name="twitter:card" property="twitter:card" content="" />--}}
    {{--<meta name="twitter:title" property="twitter:title" content="" />--}}
    {{--<meta name="twitter:description" property="twitter:description" content="" />--}}
    {{--<meta name="twitter:image" property="twitter:image" content="" />--}}
    {{--<meta name="twitter:url" property="twitter:url" content="" />--}}

    {{--<!-- FACEBOOK  -->--}}
    {{--<meta property="og:site_name" content="" />--}}
    {{--<meta name="og:title" property="og:title" content="" />--}}
    {{--<meta name="og:type" property="og:type" content="" />--}}
    {{--<meta name="og:url" property="og:url" content="" />--}}
    {{--<meta name="og:description" property="og:description" content="" />--}}
    {{--<meta property="og:image" content="" />--}}
    {{--<meta name="og:sitename" property="og:sitename" content="" />--}}

{{--@endsection--}}

@section('content')

    <div class="line"></div>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" title="Veilingsite home">
                    {{ config('app.name', 'Veilingsite') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}" title="login">Login</a></li>
                    <li><a href="{{ route('register') }}" title="register">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" title="dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" title="logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
