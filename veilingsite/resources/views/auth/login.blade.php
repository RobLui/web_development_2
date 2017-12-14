@extends('layouts.app')

@section('content')

    <div class="line"></div>

    <div class="top-nav">
        <div class="container negative">
            <div class="row">
                <a class="logo" href="{{ route('home') }}"><img src="{{ asset('images/logo.jpg') }}" alt="logo" title="logo" class="logo"></a>
                <div class="col-md-12 col-sm-12">
                    <a class="skip-main" href="#main-content" title="Skip to main content">Skip to main content</a>

                    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
                        <ul class="dropdown menu" data-dropdown-menu>
                            <li>
                                <a href="#watchlist" title="watchlist" >
                                    <img class="margin-right-half" src="{{ asset('images/elements/bars.png') }}" alt="bars" title="bars">
                                    {{--<i class="fa fa-bars margin-right-half"></i>--}}
                                    WATCHLIST
                                </a>
                            </li>
                            <li><p class="midnight-blue">|</p></li>
                            <li>
                                <a href="#profile" title="profile" >
                                    {{--<i class="fa fa-user margin-right-half"></i>--}}
                                    <img class="margin-right-half" src="{{ asset('images/elements/user.png') }}" alt="user" title="user">
                                    PROFILE
                                </a>
                            </li>
                            <li><p class="midnight-blue">|</p></li>
                            @guest
                            <li><a href="{{ route('login') }}" title="login">LOGIN</a></li>
                            <li><p class="midnight-blue">|</p></li>

                            <li><a href="{{ route('register') }}" title="register">REGISTER</a></li>
                            @else
                                <li>
                                    <a href="{{ route('logout') }}" title="logout"
                                       onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                @endguest
                        </ul>

                        <ul class="menu pull-right">
                            <li>
                                {!! Form::open(array('route' => 'search', 'class' => 'form-horizontal')) !!}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="searchtext" placeholder="Search">
                                    <button class="margin-left-half" type="submit"><span class="fa fa-search fa-2x midnight-blue"></span></button>
                                </div>
                                {{ Form::close() }}
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.nav-bottom')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection
