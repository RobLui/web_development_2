<div class="top-nav" id="first-login-view">
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
                                <a href="{{ route('profile') }}" title="profile" >
                                {{--<i class="fa fa-user margin-right-half"></i>--}}
                                <img class="margin-right-half" src="{{ asset('images/elements/user.png') }}" alt="user" title="user">
                                PROFILE
                            </a>
                            </li>
                        <li><p class="midnight-blue">|</p></li>
                        @guest
                        <li><a href="#login" id="login-toggler" title="login">LOGIN</a></li>
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

<div class="top-nav hidden" id="second-login-view">
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
                            <form class="form-inline" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
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
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group hidden">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" value="true" {{ old('remember') ? 'checked' : '' }}>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-secondary">
                                            >
                                        </button>
                                    </div>
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