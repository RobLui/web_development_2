<div class="container">
    <div class="row footer-container margin-top-6">

           <div class="col-md-9">
                <div class="col-md-4">

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

                <div class="col-md-4 col-sm-12">

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

                <div class="col-md-4">

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

            <div class="col-md-3">
                    {{--START SEARCH--}}
                    {{--END SEARCH--}}
                    <ul class="list-group">
                        <li class="list-unstyled"><a class="black" href="#">FIND WHAT YOU NEED</a></li>

                        <li class="menu">
                            {!! Form::open(array('route' => 'home', 'class' => 'form-horizontal')) !!}
                            <div class="input-group">
                                <input type="text" class="form-control" name="searchtext" placeholder="Search">
                                <button class="margin-left-half" type="submit"><span class="fa fa-search fa-2x midnight-blue"></span></button>
                            </div>
                            {{ Form::close() }}
                        </li>

                        <li class="list-unstyled margin-top-3">
                            <a href="#">CONTACT</a>
                            <p>
                                <span>Landoretti ART</span>
                                <br>
                                <span>Straatnaam xxx</span>
                                <br>
                                <span>xxxx, Oostende</span>
                            </p>
                        </li>

                        <li class="list-unstyled">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <a href="tel:+xx (0)x xxx xx xx">+xx (0)x xxx xx xx</a>
                        </li>

                        <li class="list-unstyled">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:info@landorettiart.com">info@landorettiart.com</a>
                        </li>

                    </ul>
                    <ul class="list-group">
                        <li class="list-unstyled">
                            <a href="#"><i class="fa fa-facebook fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-2x margin-right-1" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google fa-2x" aria-hidden="true"></i></a>
                        </li>
                    </ul>
            </div>

       </div>
</div>
