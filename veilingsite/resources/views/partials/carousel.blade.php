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
            <img src="{{ asset('images/elements/groen-bolleke.png') }}" alt="bol" title="bol" style="position:absolute; margin-left:2em; margin-top:3em; z-index:100;">
            <img src="{{ asset('images/carousel-images/paintings.png') }}" title="paintings" alt="paintings">
        </div>

        <div class="item">
            <img src="{{ asset('images/elements/groen-bolleke.png') }}" title="bol" alt="bol" style="position:absolute; margin-left:2em; margin-top:3em; z-index:100;">
            <img src="{{ asset('images/carousel-images/cameras.png') }}" title="cameras" alt="cameras">
        </div>

        <div class="item">
            <img src="{{ asset('images/elements/groen-bolleke.png') }}" title="bol" alt="bol" style="position:absolute; margin-left:2em; margin-top:3em; z-index:100;">
            <img src="{{ asset('images/carousel-images/paintings.png') }}" title="paintings" alt="paintings">
        </div>

        <div class="item">
            <img src="{{ asset('images/elements/groen-bolleke.png') }}" title="bol" alt="bol" style="position:absolute; margin-left:2em; margin-top:3em; z-index:100;">
            <img src="{{ asset('images/carousel-images/cameras.png') }}" title="cameras" alt="cameras">
        </div>
    </div>

    <!-- Left and right controls -->
    <a href="#myCarousel" title="#myCarousel prev" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a href="#myCarousel" title="#myCarousel next" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>