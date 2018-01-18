@extends('layouts.app')

@section('seo')

    {{--APPLE--}}
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="Landoretti" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    {{--GENERAL--}}
    <meta name="description" content="Landoretti auctions" />
    <meta name="title" content="Landoretti">
    <meta name="locale" content="en">
    <meta name="keywords" content="Landoretti, Art, Drinks, Unique artwork, abstract">
    <meta name="author" content="Robbert Luit">
    <meta name="publisher" content="Robbert Luit">
    <meta name="robots" content="all">

    {{--FACEBOOK--}}
    <meta property="og:title" content="Landoretti auctions" />
    <meta property="og:site_name" content="Landoretti" />
    <meta property="og:description" content="Landoretti auctions unique and rare pieces from all over the world" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset("images/logo.png") }}" />
    <meta property="og:url" content="{{ asset("images/logo.png") }}" />

    {{--TWITTER--}}
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="Landoretti auctions" />
    <meta property="twitter:description" content="Landoretti auctions unique and rare pieces from all over the world" />
    <meta property="twitter:image" content="{{ asset("images/logo.png") }}" />
    <meta property="twitter:url" content="{{ asset("images/logo.png") }}" />

    <link rel="icon" type="image/png" href="{{asset("favicon.ico")}}">
    <link rel="canonical" href="https://www.landoretti.robbertluit.be">

@endsection

@section('content')

    <div class="line"></div>
    <div class="nav-collapse">
        @include('partials.nav-top')

        @include('partials.nav-bottom')
    </div>
    @include('partials.carousel')

    @include('partials.cards')

    @include('partials.images')

    @include('partials.footer')

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection

