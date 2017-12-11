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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9">
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="home">Home > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="auctions">Jasper Poppe > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="salvador dali">My auctions > </a></li>
                        <span class="show-for-sr midnight-blue float-left"></span>
                        <p class="midnight-light-blue active-bold">New auction</p>
                            <h2 class="margin-bottom-half light-dark-grey">Add a new auction</h2>
                    </div>
                </div>

        <form>

                <div class="col-md-9">
                    <div class="col-md-6 col-sm-6">
                        <label class="midnight-blue">Auction title
                            <input type="text" placeholder="Auction title" required />
                        </label>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <label class="midnight-blue">Year
                            <input type="text" placeholder="xxxx" required />
                        </label>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="col-md-3 col-sm-3">
                        <label class="midnight-blue">Width
                            <input type="text" placeholder="xxxx" required />
                        </label>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <label class="midnight-blue">Height
                            <input type="text" placeholder="xxxx" required />
                        </label>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <label class="midnight-blue">Depth (optional)
                            <input type="text" placeholder="xxxx" required />
                        </label>
                    </div>
                </div>

                    <div class="col-md-3 col-sm-3 margin-top-half">
                        <br>
                        <button class="padding-complete background-dark-grey white active-bold full-width">
                            <form action="#">
                                <span class="padding-complete">ADMIT REQUEST</span>
                            </form>
                        </button>
                    </div>
            </div>
        </form>
        </div>
        </div>

    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection