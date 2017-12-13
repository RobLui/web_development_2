@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include ('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

            <div class="col-md-12 col-sm-12">

                <div class="margin-top-2 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}" title="home">Home > </a></li>
                    <span class="show-for-sr midnight-blue float-left">
                    </span><p class="midnight-light-blue active-bold">I search </p>
                </div>

                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-half light-dark-grey">I search</h2>
                    <h4 class="light-dark-grey">Add a request</h4>
                </div>
            </div>

            <form>
                <div class="col-md-12 col-sm-12">

                    <div class="col-md-6 col-sm-6">
                        <label class="midnight-blue">What are you looking for?
                            <input type="text" placeholder="input something here" required />
                        </label>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label class="midnight-blue">Artist
                            <input type="text" placeholder="enter a name" required />
                        </label>
                    </div>

                    <div class="col-md-9 col-sm-9">
                        <label class="midnight-blue">Information about the artwork
                            <textarea placeholder="enter more info" required></textarea>
                        </label>
                    </div>

                    <div class="col-md-3 col-sm-3 margin-top-half">
                        <br>
                        <button class="padding-complete background-dark-grey white active-bold full-width">
                            <form action="#">
                                <span class="padding-complete">ADMIT REQUEST</span>
                            </form>
                        </button>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="light-dark-grey">Your request must be approved by the administrator. If your question has been approved, it will appear on our site.</div>
                    </div>

                </div>
            </form>

        <div class="col-md-12 col-sm-12">
            @include('partials._overview')
        </div>

        {{-- ITEM DATA OUTPUT --}}
        <div class="col-sm-6 col-sm-offset-3">
            @if(!empty($item))
                @if(count($item) > 0)
                    <h4>Zoekresultaten Items:</h4>
                    <ul class="list-group">
                        @foreach($item as $i)
                            <li class="list-group-item">
                                <p><b>Origin:</b> {{ $i->origin }}</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>Category:</b> {{ $i->category }}</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>Description:</b> {{ $i->description }}</p>
                            </li>
                            <li class="list-group-item">
                                <p><b>Auction title:</b> {{ $i->auction_title }}</p>
                            </li>
                            {{--{{ $u }}--}}
                        @endforeach
                    </ul>
                @else
                    <h4>There was nothing found for your search terms in table: Users</h4>
                @endif

            @endif
        </div>

        </div>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection