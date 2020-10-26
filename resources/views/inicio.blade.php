<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sendero Cornizuelo</title>
          
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  
        <link rel="stylesheet" type="text/js" href="{{asset('js/app.js')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
         <!--Navegacion-->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: rgb(50, 51, 50);" id="SenderoCornizuelo" >
    <a class="navbar-brand text-white" id="Inicio">
        <img src="http://www.cemede.una.ac.cr/wp-content/uploads/2020/08/LOGOS-CEMEDE-Y-SEDES.png" height="80px" >
    </a>
    <a class="navbar-brand text-danger" href="{{ url('/') }}">Sendero Cornizuelo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#Inicio">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#Informacion">Información</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{ url('servicios') }}">Servicios</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link text-white" href="{{ url('contacto') }}">Contacto</a>
        </li>
        <li class="nav-item dropdown active">
          
          
          
            
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('almacen') }}">Almacen</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                        <!-- @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @endif
                        -->
                    </ul>
          
        </li>
       
      </ul>
    </div>
  </nav>
  


<!--Carousel-->
<div>
 <img src="https://http2.mlstatic.com/planta-de-acacia-cornigera-cornezuelo-huizache-megafono-D_NQ_NP_831120-MLM28224032781_092018-F.webp" class="d-block w-100" width="1200" height="500" alt="Cornizuelo">
</div>
<br>
<br>
<br>

<!--Tarjetas de Informacion-->
<h1 class="text-center text-white" style="background-color: darkred;" id="Informacion">Información</h1>
<br>
<div class="container-fluid justify-content" style="background-color: rgb(7, 8, 88);">
  <br>
  <p class="text-white text-center" style="font-weight: bold;">En esta plataforma podran ver la información sobre el Sendero el Cornizuelo, tanto de los animales que habitan en el, como también de las plantas que se encuentran en este, además podran hacer reservaciones de los distintos servicios que este ofrece, como lo son las caminatas, charlas, voluntariados y entre otros.</p>
  <br>
</div>
<div class="card-group">
    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://fhernanb.github.io/libro_mod_pred/images/arbol.jpg" style="height: 330px;"   class="card-img-top" alt="árbol">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;"><a href="{{ url('flora') }}">Flora</a></h2>
        <p class="card-text text-white">En el apartado de flora podra ver las imágenes e Información acerca de la vegetación que se encuentra en el Sendero el Cornizuelo.</p>
      </div> 
    </div>

    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://static.iris.net.co/sostenibilidad/upload/images/2014/7/31/31627_11512_1.jpg" style="height: 330px;" class="card-img-top" alt="Tigrillo">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;">Fauna</h2>
        <p class="card-text text-white">En el apartado de fauna podran ver las imágenes e información sobre los diversos tipos de animales que fueron tomados por las camaras trampas que se encuentran en el Sendero el Cornizuelo.</p>
      </div>
    </div>
  </div>
  <br>
<br>
<hr>

<!--Mapa-->
<body>
    <h1 class="text-center text-white" style="background-color: darkred;">Ubicación del Sendero</h1>
</body>

<br>
<div>
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1559.7790746919768!2d-85.44705397273859!3d10.133843512786466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9fb0adec037b37%3A0xcb661d6342193de4!2sCentro%20Mesoamericano%20de%20Desarrollo%20Sostenible%20del%20Tropico%20Seco%20(CEMEDE-UNA)!5e1!3m2!1ses!2scr!4v1597853700280!5m2!1ses!2scr" width="1344" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
</div>

<br>
<br>
<hr>


<!--Footer-->
<footer style="background-color: rgb(7, 8, 88)"> 
    <div class="container" >
        <div class="row " style="background-color: rgb(7, 8, 88)">
            <div class="col-md-6 text-center">
                <br>
                <h3 class="text-white text-center">Mapa del sitio</h3>
                <hr style="background-color: white;">
                <br>
                <ul class="col-md-12">
                    <li class="text-white text-center"> <a href="#SenderoCornizuelo" class="text-white"> Sendero Cornizuelo</a></li>
                    <li class="text-white text-center"><a href="#Inicio" class="text-white">Inicio</a></li>
                    <li class="text-white text-center"><a href="#Informacion" class="text-white">Información</a></li>
                    <li class="text-white text-center"><a href="#Contacto" class="text-white">Contacto</a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-6 text-center">
                <br>
                <h3 class="text-white text-center">Datos de contacto</h3>
                <hr style="background-color: white;">
                <br>
                <ul class="col-md-12">
                    <li class="text-white">Telefono: +506 2562 6212</li>
                    <li class="text-white">Correo Electrónico: cemede@una.cr</li>
                </ul> 
                <br>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column h-secreen" style="background-color: darkred;">
        <p class="text-white text-center">&copy; Copyright 2020 - Sendero Cornizuelo</p>
    </div>

</footer>


    </body>
</html>
