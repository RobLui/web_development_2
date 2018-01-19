@extends('layouts.app')

@section('title')
    Landoretti Profile
@endsection

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')


    <div class="col-md-12 col-sm-12 margin-bottom-2">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

            <div class="col-md-12 col-sm-12">
                <div class="margin-top-2">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a>
                    <p class="midnight-light-blue margin-right-half bold">Jasper Poppe</p>
                </div>
                <div class="margin-top-1">
                    <h2 class="margin-bottom-half light-dark-grey">Profile</h2>
                </div>
                <div class="col-sm-12 bordered">
                    {{--LEFT--}}
                    <div class="col-sm-3">
                        <h4 class="block margin-top-half margin-left-half ">Jasper Poppe</h4>
                        <div class="bordered-right">
                            <li class="list-unstyled margin-top-2 margin-left-1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:name@domain.com" title="info@landorettiart.com" class="underlined midnight-light-blue">name@domain.com</a>
                            </li>
                            <li class="list-unstyled margin-left-1">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="tel:+xx (0)x xxx xx xx" title="tel:+xx (0)x xxx xx xx" class="light-dark-grey">+xx (0)x xxx xx xx</a>
                            </li>
                            <li class="list-unstyled margin-top-1 margin-left-1">
                                <p>
                                    Straatnaam xxx
                                    <br>
                                    xxxx, Oostende
                                </p>
                            </li>
                        </div>
                    </div>
                    {{--RIGHT--}}
                    <div class="col-sm-3">
                        <div class="margin-top-4 col-sm-12 margin-bottom-2">
                            <li class="list-unstyled margin-top-1">
                                <span class="midnight-blue">VAT-number</span>
                            </li>
                            <li class="list-unstyled">
                                <span class="margin-left-1">xx xxx xx xx</span>
                            </li>
                            <li class="list-unstyled margin-top-1">
                                <span class="midnight-blue">Account number</span>
                            </li>
                            <li class="list-unstyled">
                                <span class="margin-left-1">xx xxx xx xx</span>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--ACTIVE AUCTIONS--}}
    <div class="col-sm-10 col-sm-offset-1 margin-bottom-2 margin-bottom-3 margin-top-2">
        <div class="col-sm-12">
        <div class="col-md-12 col-sm-12">
            <h4 class="light-dark-grey margin-bottom-1">Active auctions</h4>
        </div>

        <div class="col-sm-3">
            <img class="full-width" src="{{ asset('images/mockups/lachend.jpg') }}" alt="lachend">
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
                    <button class="hoverbtn margin-left-1-2 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                </div>
            </div>
        </div>

        <div class="col-sm-3 margin-left-images-minus">
            <img class="full-width" src="{{ asset('images/mockups/details/male_small.png') }}" alt="Male small">
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
                    <button class="hoverbtn margin-left-1-2 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                </div>
            </div>
        </div>

        <div class="col-sm-3 margin-left-images-minus">
            <img class="full-width" src="{{ asset('images/mockups/details/perfume_small.png') }}" alt="Painting small">
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
                    <button class="hoverbtn margin-left-1-2 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                </div>
            </div>
        </div>

        <div class="col-sm-3 margin-left-images-minus">
            <img class="full-width" src="{{ asset('images/mockups/details/male_small.png') }}" alt="Male small">
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
                    <button class="hoverbtn margin-left-1-2 padding-complete midnight-blue bordered-left bordered-right bordered-top">visit auction ></button>
                </div>
            </div>
        </div>
    </div></div>

    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection