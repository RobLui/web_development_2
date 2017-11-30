@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

            <div class="col-md-12 col-sm-12">

                <div class="margin-top-1 margin-left-1">
                    <a class="midnight-light-blue float-left margin-right-1" href="{{ route('home') }}">Home > </a></li>
                    <span class="show-for-sr midnight-blue float-left">
                    </span><p class="midnight-light-blue">I Search </p>
                </div>

                <div class="margin-top-1 margin-left-1">
                    <h2 class="margin-bottom-1">I search</h2>
                    <h5 class="light-dark-grey">Add a request</h5>
                </div>
            </div>

            <form>
                <div class="col-md-12 col-sm-12">

                    <div class="col-md-6 col-sm-6">
                        <label class="midnight-blue">What are you looking for?
                            <input type="text" placeholder="input something here" />
                        </label>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <label class="midnight-blue">Artist
                            <input type="text" placeholder="enter a name" />
                        </label>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <label>Information about the artwork
                            <textarea placeholder="enter more info"></textarea>
                        </label>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <br>
                        <button class="button" >default button</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection