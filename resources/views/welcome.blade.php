<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="antialiased">
    <div class="navbar first-nav">
        <div class="container menu nav">
            <div>
                <span class="span-nav"><i class="fas fa-phone-alt icono"></i>1-800-1234-567, 1-800-6547-321</span>
            </div>
            <div>
                <span class="span-nav"><i class="fas fa-map-marker-alt icono"></i>2130 Fulton Street San Diego, CA 94117-1080 USA</span>
            </div>
            <div>
                <span class="span-nav"><i class="fas fa-envelope-open icono"></i>info@demolink.org</span>
            </div>
            <div>
                <span class="span-nav"><i class="fas fa-sign-out-alt icono"></i> Login/register</span>
            </div>
        </div>
    </div>
    <div class="logo-navigate">
        <div class="logo">
            <img class="d-block w-100 logo-image" src="{{ asset('images/Logo_OscuroU.png') }}">
        </div>
        <div class="container">
            <ul>
                <li><a class="a-link" href="#home">Home</a></li>
                <li><a class="a-link" href="#news">Elements</a></li>
                <li><a class="a-link" href="#contact">Pages</a></li>
                <li><a class="a-link" href="#about">Campus</a></li>
                <li><a class="a-link" href="#about">Shop</a></li>
                <li><a class="a-link" href="#about">Donate</a></li>
                <li><a class="a-link" href="#about">Conatct</a></li>
            </ul>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner principal-carousel">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('images/paisaje.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Primera imagen</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/doctora.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Segunda imagen</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('images/oficina.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Tercera imagen</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <h1 class="text-center">Check out other themes</h1>
    </div>
    <div class="row">
        <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top imagen" src="{{ asset('images/paisaje.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top imagen" src="{{ asset('images/oficina.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top imagen" src="{{ asset('images/doctora.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>