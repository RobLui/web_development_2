@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')



    {{-- ITEM DATA OUTPUT --}}
    <div class="col-md-12 col-sm-12">
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
                            {{--<p> {{ $i }}</p>--}}
                        </li>
                    @endforeach
                </ul>
            @else
                <h4>There was nothing found for your search terms in the database</h4>
            @endif

        @endif
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection