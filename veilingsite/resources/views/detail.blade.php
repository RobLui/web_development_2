@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1">

            <div class="col-md-12 col-sm-12">

                <div class="margin-top-2 margin-left-1">
                    <span class="float-right light-dark-grey active-bold">
                        Lot ID: 84611
                    </span>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Home > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Auctions > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}">Salvador Dali > </a></li>
                    <span class="show-for-sr midnight-blue float-left"></span>
                    <p class="midnight-light-blue active-bold">Dance of Time III </p>
                </div>

                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">Dance of Time III</h2>
                    <p><span class="light-dark-grey">25d 14u 44m</span><span class="midnight-blue margin-left-half"> (7 bids)<i class="fa fa-bars margin-left-half"></i> </span></p>
                </div>

            </div>

            <div class="col-md-8 col-sm-8 margin-bottom-2">
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

            <div class="col-md-4 col-sm-4">

                <div class="col-md-12 col-sm-12 top-part">
                    <h4 class="pull-right">Dance of Time III</h4>
                    <p class="midnight-blue pull-right">1979, Salvador Dali</p>
                    <hr>
                    <p class="midnight-light-blue active-bold pull-right">25d 14u 44m left</p>
                    <p class="light-dark-grey pull-right">September 09, 2013, 13:00 p.m. (EST)</p>
                    <hr>
                    <p class="pull-right text-center">tur adipisicing elit, sed do eiusmod tempor incididunt ut labaliqore et dolore magna incididunt ut labaliqore et dolore magna..</p>
                    <a class="black active-bold underlined pull-right" href="#">more</a>
                </div>

                <div class="col-md-12 col-sm-12 bottom-part margin-top-2 bordered">
                    <p class="margin-top-half pull-right midnight-blue">
                        Estimated price:
                        <br>
                        <h4 class="pull-right midnight-blue active-bold">&euro; 9.500 - &euro; 10.500</h4>
                    </p>
                </div>

            </div>

            </div>
        </div>
    </div>
</div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection