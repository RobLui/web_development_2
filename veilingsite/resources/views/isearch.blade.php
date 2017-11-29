@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.carousel')

    <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12 col-sm-12">
                <ul class="list-group margin-top-1">
                    <li class="list-unstyled float-left"><a class="midnight-light-blue float-left" href="{{ route('home') }}">Home > </a></li>
                    <li class="list-unstyled float-left margin-left-1">
                        <span class="show-for-sr midnight-blue"></span><p class="midnight-light-blue">I Search </p>
                    </li>
                </ul>
            </div>

            <div class="col-md-12 col-sm-12">
                <ul class="list-group margin-top-1">

                    <li class="list-unstyled">
                        <h2>I Search</h2>
                    </li>

                    <li class="list-unstyled">
                        <h4 class="light-dark-grey">Add a request</h4>
                    </li>
                </ul>
            </div>
    </div>


        <div class="col-md-10 col-md-offset">

        <form>
            <div class="row">
                <div class="col-md-12">
                    <label>Input Label
                        <input type="text" placeholder="large-12.columns" />
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Input Label
                        <input type="text" placeholder="large-4.columns" />
                    </label>
                </div>
                <div class="col-md-4">
                    <label>Input Label
                        <input type="text" placeholder="large-4.columns" />
                    </label>
                </div>
                <div class="col-md-4">
                    <div class="row collapse">
                        <label>Input Label</label>
                        <div class="small-9 columns">
                            <input type="text" placeholder="small-9.columns" />
                        </div>
                        <div class="small-3 columns">
                            <span class="postfix">.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label>Select Box
                        <select>
                            <option value="husker">Husker</option>
                            <option value="starbuck">Starbuck</option>
                            <option value="hotdog">Hot Dog</option>
                            <option value="apollo">Apollo</option>
                        </select>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Choose Your Favorite</label>
                    <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
                    <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
                </div>
                <div class="col-md-6">
                    <label>Check these out</label>
                    <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
                    <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label>Textarea Label
                        <textarea placeholder="small-12.columns"></textarea>
                    </label>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>

    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection