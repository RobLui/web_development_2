@extends('layouts.app')

@section('content')

    <div class="line"></div>

    @include('partials.nav-top')

    @include('partials.nav-bottom')

    @include('partials.no-carousel')

    <div class="col-md-12 col-sm-12">

        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            {{--BREADCRUMBS--}}
            <div class="margin-left-1 margin-top-2">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-9">
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="home">Home > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="auctions">Jasper Poppe > </a></li>
                        <a class="midnight-light-blue float-left margin-right-half active-bold" href="{{ route('home') }}" title="salvador dali">My auctions > </a></li>
                        <span class="show-for-sr midnight-blue float-left"></span>
                        <p class="midnight-light-blue active-bold">New auction</p>
                        <h2 class="margin-bottom-half light-dark-grey">Add a new auction</h2>
                    </div>
                </div>

                <form>

                    {{-- OPTION VALUE LIST --}}
                    <div class="col-md-6">
                        <div class="col-md-10">
                            <select>
                                <option value="Style">Style</option>
                                <option value="Abstract">Abstract</option>
                                <option value="African American">African American</option>
                                <option value="Asian Contemporary">Asian Contemporary</option>
                                <option value="Conceptual">Conceptual</option>
                                <option value="Contemporary">Contemporary</option>
                                <option value="Emerging Artists">Emerging Artists</option>
                                <option value="Middle Eastern Contemporary">Middle Eastern Contemporary</option>
                                <option value="Minimalism">Minimalism</option>
                                <option value="Modern">Modern</option>
                                <option value="Abstract">Abstract</option>
                                <option value="Pop">Pop</option>
                                <option value="Urban">Urban</option>
                                <option value="Vintage Photographs">Vintage Photographs</option>
                            </select>
                        </div>
                    </div>

                    {{-- TITLE YEAR --}}
                    <div class="col-md-10">
                        <div class="col-md-6 col-sm-6">
                            <label class="midnight-blue">Auction title
                                <input type="text" placeholder="Auction title" required />
                            </label>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Year
                                <input type="text" placeholder="xxxx" required />
                            </label>
                        </div>
                    </div>

                    {{-- WIDTH HEIGHT DEPTH --}}
                    <div class="col-md-10">
                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Width
                                <input type="text" placeholder="xxxx" required />
                            </label>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Height
                                <input type="text" placeholder="xxxx" required />
                            </label>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Depth (optional)
                                <input type="text" placeholder="xxxx" required />
                            </label>
                        </div>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="col-md-10">
                        <div class="col-md-9">
                            <label class="midnight-blue">Description
                            </label>
                            <textarea rows="4" cols="25" name="comment" placeholder="describe your auction as thorough as possible."></textarea>
                        </div>
                    </div>

                    {{-- CONDITION --}}
                    <div class="col-md-10">
                        <div class="col-md-9">
                            <label class="midnight-blue">Condition
                            </label>
                            <textarea rows="4" cols="25" name="comment" placeholder="what's the condition of the artwork?"></textarea>
                        </div>
                    </div>

                    {{-- ORIGIN --}}
                    <div class="col-md-10">
                        <div class="col-md-9">
                            <label class="midnight-blue">Origin
                            </label>
                            <textarea rows="1" cols="25" name="comment" placeholder="what's the origin of the artwork?"></textarea>
                        </div>
                    </div>

                    {{-- PHOTOS --}}
                    <div class="col-md-10">
                        <div class="col-md-9">
                            <label class="midnight-blue">Photos
                            </label>
                            Please upload one picture with the signature of the artwork and one picture of the artwork.
                            You can upload up to 3 pictures with a maximum of 10MB each.
                        </div>
                    </div>

                    {{-- IMAGES --}}
                    <div class="col-md-10">

                        <div class="col-md-4 col-sm-4 margin-top-1">
                            <label class="btn" for="1">
                                <input id="1" type="file" style="display:none"
                                       onchange="$('#artwork_image').html(
                                    (this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
                                <span id="artwork_image">UPLOAD IMAGE OF THE ARTWORK</span>
                            </label>
                        </div>

                        <div class="col-md-4 col-sm-4 margin-top-1">
                            <label class="btn" for="2">
                                <input id="2" type="file" style="display:none"
                                       onchange="$('#signature_image').html(
                                    (this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
                                <span id="signature_image">UPLOAD IMAGE OF THE SIGNATURE</span>
                            </label>
                        </div>

                        <div class="col-md-4 col-sm-4 margin-top-1">
                            <label class="btn" for="3">
                                <input id="3" type="file" multiple="multiple" style="display:none"
                                       onchange="$('#optional_image').html(
                                    (this.files.length == 1) ? this.files[0].name : this.files.length + ' files');">
                                <span id="optional_image">OPTIONAL IMAGE</span>
                            </label>
                        </div>

                    </div>

                    {{-- PRICING --}}
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <h4 class="margin-top-1 margin-bottom-half light-dark-grey">Pricing</h4>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Minimum estimate price
                                <input type="text" placeholder="&euro; xxxx" required />
                            </label>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Maximum estimate price
                                <input type="text" placeholder="&euro; xxxx" required />
                            </label>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">Buyout price (optional)
                                <input type="text" placeholder="&euro; xxxx" required />
                            </label>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="col-md-3 col-sm-3">
                            <label class="midnight-blue">End date
                                <input type="text" placeholder="D D / M M / Y Y" required />
                            </label>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label class="midnight-blue">Attention</label>
                            You cannot change the information after adding the auction.
                            If you're not certain about the information of your artwork, please ask for help.
                            We will answer your question as soon as possible.
                        </div>
                    </div>

                    {{-- TERMS AND CONDITIONS--}}
                    <div class="col-md-10">
                        <div class="col-md-9 margin-top-2">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"> I agree to the <span class="midnight-light-blue underlined">Terms and Conditions</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 margin-top-half">
                        <div class="col-md-12">
                            <button class="padding-complete background-light-blue white active-bold full-width">
                                <form action="submit">
                                    <span class="">ADD AUCTION</span>
                                </form>
                            </button>
                        </div>
                    </div>

                </form>
                <div class="col-md-10">
                    <div class="col-md-3 margin-top-1 margin-bottom-3 text-center">
                        <a href="#ask-a-question" class="midnight-light-blue">ASK A QUESTION ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.nav-bottom')

    <div class="line"></div>

@endsection