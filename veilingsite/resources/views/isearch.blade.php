@extends('layouts.app')

@section('content')

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.carousel')

    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12">

                <ul class="list-group">
                    <li class="list-unstyled float-left"><a class="midnight-light-blue float-left" href="{{ route('home') }}">Home > </a></li>
                    <li class="list-unstyled float-left">
                        <span class="show-for-sr midnight-blue"></span><p class="midnight-light-blue">I Search </p>
                    </li>
                </ul>

                <h4>I Search</h4>

            </div>
        </div>
    </div>

    @include('partials.nav-bottom')

@endsection