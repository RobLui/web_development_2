@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include ('partials.no-carousel')

    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="col-md-12 col-sm-12">
                <div class="margin-top-1 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Home > </a></li>
                    <span class="show-for-sr midnight-blue float-left"></span>
                    <p class="midnight-light-blue active-bold">Frequenty Asked Questions</p>
                    <h2 class="light-dark-grey margin-bottom-1">Find what you're looking for?</h2>
                    <div class="bordered-complete col-md-12 col-xs-12 margin-bottom-2">
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-6 margin-top-2" href="#">How to bid?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-6 margin-top-2" href="#">How to buy?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2" href="#">How to ask a question?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-top-2" href="#">How to use a watchlist?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-6 margin-bottom-2" href="#">How to sell?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-bottom-2" href="#">How to register?</a>
                        <a class="midnight-light-blue underlined active-bold col-md-3 col-xs-12 margin-bottom-2" href="#">What is a watchlist?</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include ('partials.footer')
@endsection