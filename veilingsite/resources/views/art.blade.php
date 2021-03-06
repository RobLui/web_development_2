@extends('layouts.app')

@section('title')
    Landoretti Art
@endsection

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    @include('partials.filter')

        {{-- ITEM DATA OUTPUT --}}
    <div class="col-sm-12">
        @if(!empty($item))
            @if(count($item) > 0)
                <h4>Zoekresultaten Items:</h4>
                <ul class="list-group">
                    @foreach($item as $i)
                        <li class="list-group-item">
                            <p><b>Origin:</b> {{ $i->origin }}</p>
                            <p><b>Auction title:</b> {{ $i->auction_title }}</p>
                            <p><b>Category:</b> {{ $i->category }}</p>
                            <p><b>Description:</b> {{ $i->description }}</p>
                            <p> {{ $i }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <h4>There was nothing found for your search terms in the database</h4>
            @endif
        @endif



        <div class="col-sm-12 col-md-12 margin-bottom-3">
            <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 margin-bottom-2">

                {{--BREADCRUMBS--}}
                <div class="col-sm-12">
                    <div class="margin-top-2">
                        <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a></li>
                        <p class="midnight-light-blue float-left margin-right-half active-bold">Auctions</p></li>
                        <span class="show-for-sr midnight-blue float-left"></span>
                    </div>
                </div>

            {{-- TOP --}}
                <div class="col-sm-12 col-sm-offset-0 margin-bottom-3">
                    {{--linkse afbeelding--}}
                    <div class="col-sm-6 margin-left-1-minus">
                        <img class="imghover percent-99" src="{{ asset('images/mockups/groot_hoofd.jpg') }}" alt="groot hoofd">
                    </div>
                    {{--rechts boven 2 afbeeldingen--}}
                    <div class="col-sm-3 margin-left-images-minus-2">
                        <img class="full-width imghover" src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="parfum">
                        <a title="#" href="#">
                            <div class="caption margin-top-1 margin-left-1">
                                <p class="midnight-blue">1979, Salvador Dali</p>
                            </div>
                        </a>
                        <div class="col-sm-12 col-xs-12">
                            <h5 class="black hug-top-complete">Dance of Time III</h5>
                            <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="bordered-bottom">
                                <span class="light-dark-grey">25d 14u 44m</span>
                                <button class="hoverbtn margin-top-minus-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 margin-left-images-minus">
                        <img class="full-width imghover" src="{{ asset('images/mockups/details/male_small.png') }}" alt="male small">
                        <a title="#" href="#">
                            <div class="caption margin-top-1 margin-left-1">
                                <p class="midnight-blue">1979, Salvador Dali</p>
                            </div>
                        </a>
                        <div class="col-sm-12 col-xs-12">
                            <h5 class="black hug-top-complete">Dance of Time III</h5>
                            <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="bordered-bottom">
                                <span class="light-dark-grey">25d 14u 44m</span>
                                <button class="hoverbtn margin-top-minus-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                            </div>
                        </div>
                    </div>
                    {{--rechts onder 2 afbeeldingen--}}
                    <div class="col-sm-3 margin-left-images-minus-2">
                        <img class="full-width imghover" src="{{ asset('images/mockups/details/painting_small.png') }}" alt="painting small">
                        <a title="#" href="#">
                            <div class="caption margin-top-1 margin-left-1">
                                <p class="midnight-blue">1979, Salvador Dali</p>
                            </div>
                        </a>
                        <div class="col-sm-12 col-xs-12">
                            <h5 class="black hug-top-complete">Dance of Time III</h5>
                            <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="bordered-bottom">
                                <span class="light-dark-grey">25d 14u 44m</span>
                                <button class="hoverbtn margin-top-minus-1 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 margin-left-images-minus">
                        <img class="full-width imghover" src="{{ asset('images/mockups/details/butt_small.png') }}" alt="butt small">
                        <a title="#" href="#">
                            <div class="caption margin-top-1 margin-left-1">
                                <p class="midnight-blue">1979, Salvador Dali</p>
                            </div>
                        </a>
                        <div class="col-sm-12 col-xs-12">
                            <h5 class="black hug-top-complete">Dance of Time III</h5>
                            <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                        </div>
                        <div class="col-sm-12">
                            <div class="bordered-bottom">
                                <span class="light-dark-grey">25d 14u 44m</span>
                                <button class="hoverbtn margin-top-minus-1 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- BOTTOM --}}

                <div class="col-sm-3">
                    <img class="full-width imghover" src="{{ asset('images/mockups/lachend.jpg') }}" alt="lachend">
                    <a title="#" href="#">
                        <div class="caption margin-top-1 margin-left-1">
                            <p class="midnight-blue">1979, Salvador Dali</p>
                        </div>
                    </a>
                    <div class="col-sm-12 col-xs-12">
                        <h5 class="black hug-top-complete">Dance of Time III</h5>
                        <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="bordered-bottom">
                            <span class="light-dark-grey">25d 14u 44m</span>
                            <button class="hoverbtn margin-left-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 margin-left-images-minus">
                    <img class="full-width" src="{{ asset('images/mockups/brug.jpg') }}" alt="brug">
                    <a title="#" href="#">
                        <div class="caption margin-top-1 margin-left-1">
                            <p class="midnight-blue">1979, Salvador Dali</p>
                        </div>
                    </a>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h5 class="black hug-top-complete">Dance of Time III</h5>
                        <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="bordered-bottom">
                            <span class="light-dark-grey">25d 14u 44m</span>
                            <button class="hoverbtn margin-left-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 margin-left-images-minus">
                    <img class="full-width" src="{{ asset('images/mockups/custom/olifant.jpg') }}" alt="Painting small">
                    <a title="#" href="#">
                        <div class="caption margin-top-1 margin-left-1">
                            <p class="midnight-blue">1979, Salvador Dali</p>
                        </div>
                    </a>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h5 class="black hug-top-complete">Dance of Time III</h5>
                        <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="bordered-bottom ">
                            <span class="light-dark-grey">25d 14u 44m</span>
                            <button class="hoverbtn margin-left-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 margin-left-images-minus">
                    <img class="full-width" src="{{ asset('images/mockups/radio.jpg') }}" alt="radio">
                    <a title="#" href="#">
                        <div class="caption margin-top-1 margin-left-1">
                            <p class="midnight-blue">1979, Salvador Dali</p>
                        </div>
                    </a>
                    <div class="col-sm-12 col-xs-12">
                        <h5 class="black hug-top-complete">Dance of Time III</h5>
                        <h5 class="hug-top light-dark-grey">&euro; 8.900</h5>
                    </div>
                    <div class="col-sm-12">
                        <div class="bordered-bottom">
                            <span class="light-dark-grey">25d 14u 44m</span>
                            <button class="hoverbtn margin-left-half padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection