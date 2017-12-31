@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">



            <div class="col-md-12 col-sm-12">
                <div class="margin-top-2 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a>
                    <p class="midnight-light-blue float-left  margin-right-half">Jasper Poppe ></p>
                    <p class="midnight-light-blue active-bold">My auctions</p>
                </div>
                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">My auctions</h2>
                        <a href="{{ route('create_auction') }}" class="dark-bordered-complete background-light-grey padding-complete pull-right midnight-blue active-bold margin-top-minus-1">
                            ADD NEW AUCTION >
                        </a>
                    <h4 class="light-dark-grey">Pending</h4>
                </div>
            </div>



            <div class="col-sm-12 margin-bottom-3">

                <div class="margin-top-2 margin-left-1">
                    <div class="percent-50 float-left background-lightest-grey bordered-left bordered-top bordered-bottom">
                        <div class="margin-left-33p percent-33 float-left text-center padding-top-half">
                            Auction details
                        </div>
                        <div class="percent-33 float-left"></div>
                    </div>
                    <div class="percent-50 float-left background-lightest-grey bordered-right bordered-top bordered-bottom">
                        <div class="percent-33 float-left text-center padding-top-half">Estimated price</div>
                        <div class="percent-33 float-left text-center padding-top-half">End date</div>
                        <div class="percent-33 float-left text-center padding-top-half">Remaining time</div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    @include('partials.nav-bottom')
    <div class="line"></div>

@endsection