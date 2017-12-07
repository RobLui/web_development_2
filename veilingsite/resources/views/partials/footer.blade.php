<div class="container">
    <div class="row footer-container margin-top-6">

           <div class="col-md-8 col-sm-8 bordered-top">
                <div class="col-md-4 col-sm-4 margin-top-2">

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">HELP</a></li>
                        <li class="list-unstyled"><a href="#">Login</a></li>
                        <li class="list-unstyled"><a href="#">Register</a></li>
                    </ul>

                    <ul class="list-group">
                        <li class="list-unstyled"><a href="#" class="black">HELP</a></li>
                        <li class="list-unstyled"><a href="#">Terms of Service</a></li>
                        <li class="list-unstyled"><a href="#">Privacy Policy</a></li>
                        <li class="list-unstyled"><a href="#">FAQ</a></li>
                        <li class="list-unstyled"><a href="#">Contact Us</a></li>
                        <li class="list-unstyled"><a href="#">About Us</a></li>
                    </ul>

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">LANGUAGES</a></li>
                        <li class="list-unstyled"><a href="#">Nederlands</a></li>
                        <li class="list-unstyled"><a href="#">Francais</a></li>
                        <li class="list-unstyled"><a href="#">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 margin-top-2">

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">STYLE</a></li>
                        <li class="list-unstyled"><a href="#">Abstract</a></li>
                        <li class="list-unstyled"><a href="#">African American</a></li>
                        <li class="list-unstyled"><a href="#">Asian Contemporary</a></li>
                        <li class="list-unstyled"><a href="#">Conceptual</a></li>
                        <li class="list-unstyled"><a href="#">Contemporary</a></li>
                        <li class="list-unstyled"><a href="#"><a href="#">Emerging Artists</a></li>
                        <li class="list-unstyled"><a href="#">Figurative</a></li>
                        <li class="list-unstyled"><a href="#">Middle Eastern Contemporary</a></li>
                        <li class="list-unstyled"><a href="#">Minimalism</a></li>
                        <li class="list-unstyled"><a href="#">Modern</a></li>
                        <li class="list-unstyled"><a href="#">Pop</a></li>
                        <li class="list-unstyled"><a href="#">Urban</a></li>
                        <li class="list-unstyled"><a href="#">Vintage Photographs</a></li>
                   </ul>

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">STYLE</a></li>
                        <li class="list-unstyled"><a href="#">Design</a></li>
                        <li class="list-unstyled"><a href="#">Paintings and Works on Paper</a>
                        <li class="list-unstyled"><a href="#">Photographs</a>
                        <li class="list-unstyled"><a href="#">Prints and Multiples</a>
                        <li class="list-unstyled"><a href="#">Sculpture</a>
                    </ul>

                </div>

                <div class="col-md-4 col-sm-4 margin-top-2">

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">PRICE</a></li>
                        <li class="list-unstyled"><a href="#">Up to 5,000</a></li>
                        <li class="list-unstyled"><a href="#">5,000 - 10,000</a></li>
                        <li class="list-unstyled"><a href="#">25,000 - 50,000</a></li>
                        <li class="list-unstyled"><a href="#">50,000 - 100,000</a></li>
                        <li class="list-unstyled"><a href="#">Above</a></li>
                    </ul>

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">ERA</a></li>
                        <li class="list-unstyled"><a href="#">Pre-War</a></li>
                        <li class="list-unstyled"><a href="#">1940s-1950s</a></li>
                        <li class="list-unstyled"><a href="#">1960s-1980s</a></li>
                        <li class="list-unstyled"><a href="#">1980s-Present</a></li>
                    </ul>

                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">ENDINGS</a></li>
                        <li class="list-unstyled"><a href="#">Ending this Week</a></li>
                        <li class="list-unstyled"><a href="#">Newly Listed</a></li>
                        <li class="list-unstyled"><a href="#">Purchase Now</a></li>
                        <li class="list-unstyled"><a href="#">1990s-Present</a></li>
                    </ul>

                </div>

            </div>

            <div class="col-md-4 col-sm-4 bordered-left bordered-top">
                    {{--START SEARCH--}}
                    {{--END SEARCH--}}
                <div class="col-md-12 margin-top-2">
                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">FIND WHAT YOU NEED</a></li>

                        <li class="menu">
                            {!! Form::open(array('route' => 'home', 'class' => 'form-horizontal')) !!}
                            <div class="input-group margin-top-1">
                                <input type="text" class="form-control" name="searchtext" placeholder="Search">
                                <button class="margin-left-half" type="submit"><span class="fa fa-search fa-2x midnight-blue"></span></button>
                            </div>
                            {{ Form::close() }}
                        </li>

                        <li class="list-unstyled margin-top-6">
                            <a class="black full-width" href="#">CONTACT</a>
                            <span class="light-dark-grey">Landoretti ART</span>
                            <br>
                            <span class="light-dark-grey">Straatnaam xxx</span>
                            <br>
                            <span class="light-dark-grey">xxxx, Oostende</span>
                        </li>

                        <li class="list-unstyled margin-top-2">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a class="light-dark-grey" href="tel:+xx (0)x xxx xx xx">+xx (0)x xxx xx xx</a>
                        </li>

                        <li class="list-unstyled">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a class="underlined" href="mailto:info@landorettiart.com">info@landorettiart.com</a>
                        </li>

                    </ul>
                    <ul class="list-group">
                        <li class="list-unstyled">
                            <a title="facebook link" href="#"><i class="fa fa-facebook fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a title="twitter link" href="#"><i class="fa fa-twitter fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a title="youtube link" href="#"><i class="fa fa-youtube fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a title="google link" href="#"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-unstyled">
                            <div class="bottom light-dark-grey margin-top-12">
                                &copy; 2013 Studio6, Inc. All rights reserved.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
       </div>
</div>
