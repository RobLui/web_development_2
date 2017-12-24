@extends('layouts.app')

@section('content')

    <div class="line"></div>

    <div class="top-nav" id="second-login-view">
        <div class="container negative">
            <div class="row">
                <a class="logo" href="{{ route('home') }}"><img src="{{ asset('images/logo.jpg') }}" alt="logo" title="logo" class="logo"></a>
                <div class="col-md-12 col-sm-12">
                    <a class="skip-main" href="#main-content" title="Skip to main content">Skip to main content</a>

                    <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
                        <ul class="dropdown menu" data-dropdown-menu>

                            @guest
                            <li><a href="{{ route('register') }}" title="register">REGISTER</a></li>

                            <li>
                                <form class="form-inline margin-bottom-fourth" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group login-form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input placeholder="User" id="email" type="email" class="background-light-grey" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group login-form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input placeholder="Password" id="password" type="password" class="" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group hidden">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn-default login-form-group">
                                            <img src="{{ asset('images/elements/login-arrow.png') }}" alt="login arrow">
                                        </button>
                                    </div>
                                </form>
                            </li>

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

    <div class="line"></div>

@endsection
