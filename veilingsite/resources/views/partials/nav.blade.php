<div class="top-bar">

    <div class="container">
        <div class="row">
            {{-- LEFT --}}
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a></li>
                    {{--<li>--}}
                        {{--<button class="menu-icon" data-toggle>--}}
                        {{--</button>--}}
                    {{--</li>--}}
                    <li class="col-md-2"><a href="#"> <i class="fa fa-bars"></i> WATCHLIST</a></li>
                    <li class="col-md-2"><a href="#"> <i class="fa fa-user"></i> PROFILE </a></li>
                    <li class="col-md-2"><a href="#">LOGOUT</a></li>
                    <li>
                    {{-- RIGHT --}}
                    {!! Form::open(array('route' => 'home', 'class' => 'form-horizontal')) !!}
                        <div class="input-group col-md-2">
                            <input type="text" class="form-control" name="searchtext" placeholder="Search">
                            <button type="submit"><span class="fa fa-search fa-2x"></span></button>
                        </div>
                    {{ Form::close() }}
                </li>
            </div>
        </div>
    </div>

</div>
