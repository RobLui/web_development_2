@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include ('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

            <div class="col-md-12 col-sm-12">

                <div class="margin-top-1 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-half" href="{{ route('home') }}">Home > </a></li>
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
                        <button class="button secondary">ADMIN REQUEST</button>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="light-dark-grey">Your request must be approved by the administrator. If your question has been approved, it will appear on our site.</div>
                    </div>

                </div>
            </form>

        <div class="col-md-12 col-sm-12">
            @include('partials._overview')
        </div>

        </div>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection