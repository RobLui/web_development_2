@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

            {{--BREADCRUMBS--}}
            <div class="margin-left-1 margin-top-2">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-9">
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Home > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Auctions > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Salvador Dali > </a></li>
                        <span class="show-for-sr midnight-blue float-left"></span>
                        <p class="midnight-light-blue active-bold">Dance of Time III </p>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <p class="light-dark-grey active-bold margin-left-6"> Lot ID: 84611</p>
                    </div>

                    <div class="margin-left-1">
                        <h2 class="margin-bottom-half light-dark-grey  hug-top">Dance of Time III</h2>
                        <p>
                            <span class="light-dark-grey">25d 14u 44m</span>
                            <span class="midnight-blue margin-left-half"> (7 bids)<i class="fa fa-bars margin-left-half"></i> </span>
                        </p>
                    </div>
                </div>

            {{--LINKER HELFT--}}
            <div class="col-md-8 col-sm-8 margin-bottom-2 margin-top-1">
                <div class="col-md-12">
                    <img src="{{ asset("images/mockups/camera.png") }}" class="img bordered ull-width" alt="Responsive image">
                </div>
                <div class="col-md-4 col-sm-4 margin-top-1">
                    <img src="{{ asset("images/mockups/camera_1.png") }}" class="img bordered full-width" alt="Responsive image">
                </div>
                <div class="col-md-4 col-sm-4 margin-top-1">
                    <img src="{{ asset("images/mockups/camera_mid.png") }}" class="img bordered full-width" alt="Responsive image">
                </div>
                <div class="col-md-4 col-sm-4 margin-top-1">
                    <img src="{{ asset("images/mockups/camera_2.png") }}" class="img bordered full-width" alt="Responsive image">
                </div>
            </div>

             {{--RECHTER HELFT--}}
            <div class="col-md-4 col-sm-4">
                <div class="col-md-9 col-sm-9 top-part">
                    <h4 class="pull-right hug-top">Dance of Time III</h4>
                    <p class="midnight-blue pull-right hug-top">1979, Salvador Dali</p>
                    <hr>
                    <p class="midnight-light-blue active-bold pull-right hug-top">25d 14u 44m left</p>
                    <p class="light-dark-grey pull-right hug-top">September 09, 2013, 13:00 p.m.</p>
                    <hr>
                    <p class="pull-right text-right">tur adipisicing elit, sed do eiusmod tempor incididunt ut labaliqore et dolore magna incididunt ut labaliqore et dolore magna..</p>
                    <a class="black active-bold underlined pull-right hug-top" href="#">more</a>
                </div>

                <div class="col-md-9 col-sm-9 bottom-part margin-top-2 bordered">
                    <p class="margin-top-half pull-right midnight-blue">Estimated price:</p>
                    <h4 class="pull-right midnight-blue active-bold hug-top">&euro; 9.500 - &euro; 10.500</h4>
                    <span class="pull-right hug-top">
                        <a class="midnight-light-blue underlined active-bold" href="#">Buy now for: &euro; 15.000</a>
                    </span>
                    <div class="float-left margin-top-1 full-width">
                        <form>
                            <div class="form-group row background-light-blue">
                                <div class="col-md-6 col-sm-6 margin-top-1">
                                    <input type="text" class="form-control" placeholder="&euro;">
                                </div>
                                <div class="col-md-6 col-sm-6 margin-top-anderhalf">
                                    <a class="white active-bold" href="#">BID NOW <img class="margin-left-half" src="{{ asset('images/elements/pijltje.png') }}" alt="arrow"></a>
                                </div>
                            </div>
                        </form>
                        <div class="text-center margin-bottom-half hug-top">
                            <i class="fa fa-bars"></i>
                            <a class="midnight-blue underlined active-bold" href="#">
                                add to my watchlist
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="background-light-grey full-width">
                @include('partials.thumbnail-gallery')
            </div>

        </div>
    </div>
</div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection