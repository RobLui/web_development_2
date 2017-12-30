@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    @include('partials.filter')

    <div class="col-sm-12 text-center margin-top-3 margin-bottom-3">
        <a href="{{ route('create_auction') }}" class="btn btn-primary">create auction</a>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection