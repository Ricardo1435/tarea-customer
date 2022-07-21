@extends ('layouts.main')
@section('content')

    <!-- Carrusel -->
    <div id="carouselImage" class="carousel slide my-4 mx-5" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselImage" data-slide-to="0" class="active"></li>
            <li data-target="#carouselImage" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" id="imageCarusel">
            <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="..."  />
            </div>
            <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100"  />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselImage" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselImage" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="copyRight">
        <center>© Copyright Electrónicos S.A.</center>
    </div>
@endsection
