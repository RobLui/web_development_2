@extends('layouts.app')

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
                    <p class="midnight-light-blue margin-right-half bold">Jasper Poppe</p>
                </div>
                <div class="margin-top-1 margin-left-1">
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

    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection