<div class="top-bar">

    {{-- LEFT --}}
    <div class="top-bar-left inverse">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a></li>
            <li><a href="#">WATCHLIST</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#">LOGOUT</a></li>
        </ul>
    </div>

    {{-- RIGHT --}}
    <div class="top-bar-right">
        <ul class="menu margin-right-2">
            <li><input type="search" placeholder="Search"></li>
            <li><button><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
            </li>
        </ul>
    </div>

</div>
