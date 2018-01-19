@extends('layouts.app')

@section('title')
    Landoretti MyWatchlist
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
                <a class="midnight-light-blue float-left margin-right-half" href="{{ route('profile') }}" title="auctions">Jasper Poppe > </a></li>
                <p class="midnight-light-blue float-left margin-right-half active-bold">My watchlist</p></li>
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

            <div class="percent-100">
                <div class="margin-left-2 margin-bottom-1 width-100 block">
                    <a href="#" class="black bold ">all(11)</a>
                    <span class="light-dark-grey">|</span>
                    <a href="#" class="light-dark-grey"> active(8)</a>
                    <span class="light-dark-grey">|</span>
                    <a href="#" class="light-dark-grey"> ended(3)</a>
                </div>
            </div>

            {{--LINKERHELFT--}}
            <div class="percent-50 bordered-bottom float-left">

                {{--TOP GRIJS--}}
                <div class="percent-95 bordered-left bordered-bottom pull-right">
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

                    <div class="percent-95 bordered-bottom float-left">
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
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="perfume small">
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
                    <div class="percent-95 bordered-bottom float-left">
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

                {{--SCHILDERIJ--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
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
                </div>

                {{--BRUG--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/brug.jpg') }}" alt="bridges">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--BUTT--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/details/butt_small.png') }}" alt="butt small">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--CUSTOM OLIFANT--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/custom/olifant.jpg') }}" alt="custom olifant">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--CUSTOM ZEE--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/custom/zee.jpg') }}" alt="custom zee">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--LACHEND--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/lachend.jpg') }}" alt="butt small">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--CUSTOM PLATENSPELER--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/custom/platenspeler.jpg') }}" alt="custom platenspeler">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{--CUSTOM JIP N JANNEKE--}}
                <div class="percent-100 float-left">
                    <div class="percent-5 float-left styled-checkbox">
                        <form action="">
                            <span class="checkmark">
                            </span>
                            <input type="checkbox">
                        </form>
                    </div>
                    <div class="percent-95 bordered-bottom float-left">
                        <div class="percent-33 float-left">
                            <img src="{{ asset('images/mockups/custom/jip-n-janneke.jpg') }}" alt="custom jup n janneke">
                        </div>
                        <div class="percent-67 float-left background-white">
                            <div class="margin-top-25p margin-left-3">
                                <h4>Dance of Time III</h4>
                                <a href="#" class="midnight-blue">1979, Salvador Dali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            {{--RECHTERHELFT--}}
            <div class="percent-50 bordered-right float-left">

                @include('my-auctions-partials.tright')

                {{--BOTTOM--}}
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
                <div class="percent-100 float-left bordered-left bordered-top bordered-bottom ">
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        <h4>&euro; 8900</h4>
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        September 09, 2013 13:00 p.m. (EST)
                    </div>
                    <div class="percent-33 margin-top-20p margin-bottom-3 float-left text-center">
                        sold
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection