@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include ('partials.no-carousel')

    <div class="col-md-12">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="col-md-12 col-sm-12">
                <div class="margin-top-2 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Home > </a></li>
                    <span class="show-for-sr midnight-blue float-left"></span>
                    <p class="midnight-light-blue active-bold">Frequenty Asked Questions</p>
                    <h2 class="light-dark-grey margin-bottom-1">Find what you're looking for?</h2>
                    <div class="bordered-complete col-md-12 col-xs-12 margin-bottom-2">
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2" href="#">How to bid?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2" href="#">How to buy?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2" href="#">How to ask a question?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2 margin-bottom-2" href="#">How to use a watchlist?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-bottom-2" href="#">How to sell?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-bottom-2" href="#">How to register?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-bottom-2" href="#">What is a watchlist?</a>
                    </div>
                </div>
            <button class="background-light-grey midnight-blue pull-right padding-complete">I SEARCH ></button>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to bid?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to sell?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to buy?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to register?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to ask a question?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">What is a watchlist?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="midnight-blue">Q</h4>
                    </div>
                    <div class="col-md-11">
                        <h5 class="midnight-blue active-bold">How to use a watchlist?</h5>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-1">
                        <h4 class="">A</h4>
                    </div>
                    <div class="col-md-11">
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis <span class="active-bold">nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea <span class="midnight-light-blue active-bold underlined">commodo consequat</span>. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

    @include ('partials.footer')
@endsection