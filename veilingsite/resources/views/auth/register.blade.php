@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    {{--BREADCRUMBS--}}

    <div class="col-sm-10 col-sm-offset-1">

        <div class="col-sm-10 col-sm-offset-1">
            <div class="margin-left-1 margin-top-2">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9">
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="home">Home > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="auctions">Auctions > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="salvador dali">Salvador Dali > </a></li>
                        <span class="show-for-sr midnight-blue float-left"></span>
                        <p class="midnight-light-blue active-bold">Dance of Time III </p>
                        <h2 class="margin-bottom-half light-dark-grey">Register</h2>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 margin-bottom-5">

            {!!  Form::open(['route' => 'register','method' => 'post', 'files' => true]) !!}

                {{ csrf_field() }}

                {{-- COMPANY/NAME &  EMAIL --}}
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <label class="midnight-blue">Company or name
                            <input class="background-light-grey-i" type="text" name="auction_title">
                        </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="midnight-blue">Email
                            <input class="background-light-grey-i" type="email" name="email">
                        </label>
                    </div>
                </div>

                {{-- PASSWORD & CONFIRMATION --}}
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <label class="midnight-blue">Password
                            <input class="background-light-grey-i" type="password" name="password">
                        </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="midnight-blue">Password Confirmation
                            <input class="background-light-grey-i" type="password" name="password_confirmation">
                        </label>
                    </div>
                </div>

                {{-- COUNTRY ZIP & ZIP CODE --}}
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <label class="midnight-blue">Country
                            <input class="background-light-grey-i" type="text" name="country">
                        </label>
                    </div>
                    <div class="col-sm-3">
                        <label class="midnight-blue">Zip Code
                            <input class="background-light-grey-i" type="text" name="zip_code">
                        </label>
                    </div>
                    <div class="col-sm-3">
                        <label class="midnight-blue">City
                            <input class="background-light-grey-i" type="text" name="city">
                        </label>
                    </div>
                </div>

                {{-- ADDRESS & PHONENUMBER --}}
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <label class="midnight-blue">Address
                            <input class="background-light-grey-i" type="text" name="address">
                        </label>
                    </div>

                    <div class="col-sm-2">
                        <label class="midnight-blue">Phone
                            <input class="background-light-grey-i" type="text" name="zip_code">
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="midnight-blue">Number
                            <input class="background-light-grey-i" type="text" name="city" placeholder="xx xxx xx xx">
                        </label>
                    </div>
                </div>

                {{-- ACCOUNT NUMBER & VAT-NUMBER --}}
                <div class="col-sm-10">
                    <div class="col-sm-6">
                        <label class="midnight-blue">Account Number
                            <input class="background-light-grey-i" type="text" name="account_number" placeholder="xx xxx xx xx">
                        </label>
                    </div>

                    <div class="col-sm-6">
                        <label class="midnight-blue">VAT-number
                            <input class="background-light-grey-i" type="text" name="vat_number" placeholder="xx xxx xx xx">
                        </label>
                    </div>
                </div>
                {{-- ACCOUNT NUMBER & VAT-NUMBER --}}
                <div class="col-sm-10">
                    <div class="col-sm-12">
                        <label class="midnight-blue">Alternative payment methods
                            <input class="background-light-grey-i" type="text" name="alternative_payment_methods">
                        </label>
                    </div>

                </div>

                {{-- TERMS AND CONDITIONS--}}
                <div class="col-md-10">
                    <div class="col-md-9 margin-top-2">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input name="agreed" class="form-check-input" type="checkbox" id="inlineCheckbox"> I Agree To <span class="midnight-light-blue underlined">The Terms and Conditions</span>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- ADD AUCTION BUTTON--}}
                <div class="col-md-4 col-sm-4 margin-top-half">
                    <div class="col-md-12">
                        {{ Form::submit('REGISTER', array('class' => 'padding-complete background-light-blue white active-bold full-width')) }}
                    </div>
                </div>

            {{ Form::close() }}

            </div>
        </div>
    </div>

    @include('partials.footer')
    @include('partials.nav-bottom')
    <div class="line"></div>

    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}

                    {{--<div class="panel-body">--}}
                        {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                    {{--@if ($errors->has('name'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                        {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Register--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
