<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">

                    <ul class="dropdown menu black topnav" data-dropdown-menu>
                        <li><a href="{{ route('home') }}" title="home">HOME</a></li>
                        <li><a href="{{ route('art') }}" title="art">ART</a></li>
                        <li><a href="{{ route('isearch') }}" title="isearch">ISEARCH</a></li>
                        <li><a href="{{ route('myauctions') }}" title="myactions">MYAUCTIONS</a></li>
                        <li><a href="{{ route('mybids') }}" title="mybids">MYBIDS</a></li>
                        <li><a href="{{ route('contact') }}" title="contact">CONTACT</a></li>
                    </ul>

                    <ul class="menu pull-right responsive-nav langicons">
                        <li><a href="{{ route('set-language','nl') }}" title="nl translation" class="{{ Config::get('app.locale') == "nl" ? 'active-bold' : '' }}">NL</a></li>
                        <li><a href="{{ route('set-language','fr') }}" title="fr tanslation" class="{{ Config::get('app.locale') == "fr" ? 'active-bold' : '' }}">FR</a></li>
                        <li><a href="{{ route('set-language','en') }}" title="en translation" class="{{ Config::get('app.locale') == "en" ? 'active-bold' : '' }}">EN</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

