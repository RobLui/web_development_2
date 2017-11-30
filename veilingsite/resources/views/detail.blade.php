@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

            <div class="col-md-12 col-sm-12">

                    <span class="margin-top-1 margin-left-1 float-right light-dark-grey">
                        Lot ID: 84611
                    </span>
                <div class="margin-top-1 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Home > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Auctions > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Salvador Dali > </a></li>
                    <span class="show-for-sr midnight-blue float-left">
                    </span><p class="midnight-light-blue active-bold">Dance of Time III </p>

            </div>

                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">Dance of Time III</h2>
                    <p><span class="light-dark-grey">25d 14u 44m</span><span class="midnight-blue"> (7 bids) <i class="fa fa-bars"></i> </span></p>
                </div>

                <div class="col-md-9">
                    <img src="{{ asset("images/mockups/platenspeler.png") }}" class="img full-width" alt="Responsive image">


                </div>

            </div>
        </div>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection