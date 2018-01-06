@extends('layouts.app')

@section('seo')

@endsection

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-sm-12 margin-bottom-3">
        <div class="col-sm-10 col-sm-offset-1 margin-bottom-2">

            {{--BREADCRUMBS--}}
            <div class="margin-top-2">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="auctions">Jasper Poppe > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="salvador dali">My watchlist > </a></li>
                    <span class="show-for-sr midnight-blue float-left"></span>
            </div>

            {{-- BUTTONS --}}
            <div class="margin-top-6 margin-left-1">
                <a href="#" class="dark-bordered-complete background-light-grey padding-complete pull-right midnight-blue active-bold margin-left-1">
                    CLEAR WATCHLIST >
                </a>
                <a href="#" class="dark-bordered-complete background-light-grey padding-complete pull-right midnight-blue active-bold">
                    DELETE SELECTED >
                </a>
            </div>

            <h2 class="margin-top-1 margin-bottom-1 light-dark-grey">My watchlist</h2>

            {{--LINKS--}}

            <div class="percent-50 bordered-bottom float-left">
                <div class="percent-90 bordered-left bordered-bottom pull-right">
                    @include('my-auctions-partials.tleft')
                </div>

                {{--RADIO--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>

                    <div class="percent-90 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/radio.jpg') }}" alt="radio">
                        </div>

                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--PERFUME SMALL--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-90 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="perfume">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--MALE SMALL--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-90 float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/details/male_small.png') }}" alt="male small">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/male_small.png') }}" alt="male small">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/painting_small.png') }}" alt="painting small">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/brug.jpg') }}" alt="img">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="img">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="img">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="img">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                <div class="percent-100 bordered-top float-left">
                    <div class="percent-33 float-left">
                        <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="img">
                    </div>
                    <div class="percent-67 float-left background-white">
                        <div class="margin-top-25p margin-left-3">
                            <h4>Dance of Time III</h4>
                            <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                        </div>
                    </div>
                </div>
                {{--EIND BOTTOM--}}

            </div>


            {{--RECHTS--}}
            <div class="percent-50 bordered-right float-left a-height">

                @include('my-auctions-partials.tright')

                {{--BOTTOM--}}
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top">
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top">
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-27p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top">
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top">
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top">
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top bordered-bottom">
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-25p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>

                {{--EIND BOTTOM--}}
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection