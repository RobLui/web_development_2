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
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="home">Home > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="auctions">Auctions > </a></li>
                    <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="salvador dali">Salvador Dali > </a></li>
                    <span class="show-for-sr midnight-blue float-left"></span>
                    <p class="midnight-light-blue active-bold">Dance of Time III </p>
            </div>

            <h4 class="light-dark-grey">My watchlist</h4>

            {{--LINKS--}}

            <div class="percent-50 bordered-left bordered-bottom float-left a-height">
                @include('my-auctions-partials.tleft')

                {{--BOTTOM--}}
                <div class="percent-100 bordered-top float-left">
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
                <div class="percent-100 bordered-top float-left">
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