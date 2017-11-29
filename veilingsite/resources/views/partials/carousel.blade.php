<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('images/carousel-images/paintings.png') }}" alt="alt 1">
        </div>

        <div class="item">
            <img src="{{ asset('images/carousel-images/cameras.png') }}" alt="alt 2">
        </div>

        <div class="item">
            <img src="{{ asset('images/carousel-images/paintings.png') }}" alt="alt 3">
        </div>

        <div class="item">
            <img src="{{ asset('images/carousel-images/cameras.png') }}" alt="alt 4">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>