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
                    <p class="midnight-light-blue margin-right-half">Jasper Poppe ></p>
                </div>
                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">My auctions</h2>
                </div>
                <div class="bordered">
                    <h5 class="margin-top-half margin-left-1">Jasper Poppe</h5>
                    <div class="list-group">
                        <li class="list-unstyled margin-top-2 margin-left-2">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@landorettiart.com" title="info@landorettiart.com" class="underlined midnight-light-blue">info@landorettiart.com</a>
                        </li>
                        <li class="list-unstyled margin-left-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+xx (0)x xxx xx xx" title="tel:+xx (0)x xxx xx xx" class="light-dark-grey">+xx (0)x xxx xx xx</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection