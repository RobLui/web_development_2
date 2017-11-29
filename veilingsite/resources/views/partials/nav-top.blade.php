<div class="top-nav">
    <div class="container">
        <div class="row">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.jpg') }}" alt="logo"></a>
            <div class="col-md-12">
                <div class="col-md-10 col-md-offset-2">

                    <ul class="dropdown menu" data-dropdown-menu>
                        <li><a href="#"> <i class="fa fa-bars"></i> WATCHLIST </a></li>
                        <li><p class="midnight-blue">|</p></li>
                        <li><a href="#"> <i class="fa fa-user"></i> PROFILE </a></li>
                        <li><p class="midnight-blue">|</p></li>
                        <li><a href="#">LOGOUT</a></li>
                    </ul>

                    <ul class="menu pull-right">
                        <li>
                            {!! Form::open(array('route' => 'home', 'class' => 'form-horizontal')) !!}
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