@extends('layouts.app')

@section('title')
    Landoretti MyAuctions
@endsection

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12 margin-bottom-2">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

            <div class="col-md-12 col-sm-12">
                <div class="margin-top-2 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a>
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('profile') }}">Jasper Poppe ></a>
                    <p class="midnight-light-blue active-bold">My auctions</p>
                </div>
                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">My auctions</h2>
                    <a href="{{ route('create_auction') }}" class="dark-bordered-complete background-light-grey padding-complete pull-right midnight-blue active-bold margin-top-minus-1">
                        ADD NEW AUCTION >
                    </a>
                </div>
            </div>

            @include('my-auctions-partials._pending')
            @include('my-auctions-partials._refused')
            @include('my-auctions-partials._active')
            @include('my-auctions-partials._expired')
            @include('my-auctions-partials._sold')
        </div>
    </div>
    @include('partials.footer')
    @include('partials.nav-bottom')
    <div class="line"></div>

@endsection