<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <style>	
			footer ul{
				font-family: sans-serif;
				text-align: left;
				color: white;
				font-size: 12px;
			}
			footer ul li{
				text-align: left;
				list-style-type: none;
			}
.redes{
				text-align: left;
			}
.footer-pie{
				font-size: 11px;
				color: gray;
				background-color: black;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .carrito{
                font-size: 24px; color: black;
            }
    </style>
    </head>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-tabs fixed-top" id="myTab" role="tablist>
                    <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Catalogo">Catalogo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Distribuidores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Acerca</a>
                                </li>
                                <li class="">
                                    <a class="nav-link" href="#">Contactos</a>
                                </li>
                        </ul>
                        <ul class="navbar-nav justify-content-between">
                                 @if (Route::has('login'))
        
                                 @auth  
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                        </li>
                                 @else
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                                        </li>
                                 @endauth
                                   
                                @endif
                             
                        </ul>
                </div>
            </nav>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <img class="d-block w-100" height="550px" src="https://img.freepik.com/psd-gratis/diseno-fondo-abstracto_1297-87.jpg?size=626&ext=jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                                    <h5>Prueba</h5>
                                                    <p>Contenido</p>
                                        </div>
                                 </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" height="550px"  src="https://tecnobitt.com/wp-content/uploads/2014/03/fondos-ubuntu.jpg" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                                    <h5>Prueba</h5>
                                                    <p>Contenido</p>
                                        </div>                                 
                                 </div>
                                <div class="carousel-item">
                                        <img class="d-block w-100" height="550px"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpgkma9n55Ksz7AWBYmcmqJnDkeZMw3IuXqofwIl6JEgNPnKWN" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                                    <h5>Prueba</h5>
                                                    <p>Contenido</p>
                                        </div>
                                </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </header>
    <body>
    <div class="container-fluid">
            @yield('content')
    </div>
    <footer class="dark bg-dark">
            <br>
                <div class="row">
                    <div class="col-md-12">
                             <h1 class="display-5 text-center">SÍGUENOS EN REDES SOCIALES</h1>
                    </div>
                </div>
                <div class="row justify-content-center">
                        <ul class="col-8">
                                    <div class="row justify-content-center">
                                        <li class="col-3">
                                            <span style="font-size: 48px; color: Dodgerblue;"><i class="fab fa-facebook-square col"></i></span>
                                        </li>
                                        <li class="col-3">
                                            <span style="font-size: 48px; color: Dodgerblue;"><i class="fab fa-twitter-square col"></i></span>
                                        </li>
                                        <li class="col-3">
                                            <span style="font-size: 48px; color: Dodgerblue;"><i class="fab fa-linkedin col"></i></span>
                                        </li>
                                        <li class="col-3">
                                            <span style="font-size: 48px; color: Dodgerblue;"><i class="fab fa-skype col"></i></span>
                                        </li>
                                    </div>
                        </ul>
                </div>
			</footer>
            <footer class="footer-pie">
				<br>
				<p class="text-center">
    			Asesores & Consultores DiverWeb.  Copyright 2014 Todos los derechos reservados | Powered by Directo Internet
				</p><br></footer>
            <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
