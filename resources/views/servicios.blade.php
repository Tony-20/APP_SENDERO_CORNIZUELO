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
    <a class="navbar-brand text-white" id="Servicios">
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
          <a class="nav-link text-white" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="{{ url('servicios') }}">Servicios</a>
        </li>
        
        <li class="nav-item dropdown active">
          
          
          
            
          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Route::has('login'))
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
                    </ul>
          
        </li>
       
      </ul>
    </div>
  </nav>
  
  




<!--Tarjetas de Informacion-->
<h1 class="text-center text-white" style="background-color: darkred;" id="Reservacion">Reservacion de Sendero</h1>
<br>
<div class="container-fluid justify-content" style="background-color: rgb(7, 8, 88);">
  <br>
  <p class="text-white text-center" style="font-weight: bold;">En este apartado podran llenar los formularios para realizar la reservación del Sendero el Cornizuelo, estara el formulario individual y el grupal.</p>
  <br>
</div>
<div class="card-group">
    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.QBg_O2yBkae5ZVpUSI8v2wHaFj%26pid%3DApi&f=1" style="height: 330px;"   class="card-img-top" alt="árbol">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;">Reservación Individual del Sendero</h2>
        <p class="card-text text-white">Al hacer click en el siguiente link, seran redireccionados al formulario de reserva individual del Sendero el Cornizuelo</p>
        <hr style="background-color: white;">
                <br>
        <ul class="col-md-12">
                    <li class="text-danger text-center"> <a href="{{ url('formresind') }}" class="text-danger"> Formulario Individual</a></li>
                </ul>
      </div> 
      
    </div>

    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.QBg_O2yBkae5ZVpUSI8v2wHaFj%26pid%3DApi&f=1" style="height: 330px;" class="card-img-top" alt="Tigrillo">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;">Reservación Grupal del Sendero</h2>
        <p class="card-text text-white">Al hacer click en el siguiente link, seran redireccionados al formulario de reserva grupal del Sendero el Cornizuelo</p>
        <hr style="background-color: white;">
                <br>
      <ul class="col-md-12">
                    <li class="text-danger text-center"> <a href="{{ url('formresgrup') }}" class="text-danger"> Formulario Grupal</a></li>
                </ul>
      </div>
      
    </div>
  </div>
  <br>
<br>
<hr>

<h1 class="text-center text-white" style="background-color: darkred;" id="Voluntariado">Voluntariado del Sendero</h1>
<br>
<div class="container-fluid justify-content" style="background-color: rgb(7, 8, 88);">
  <br>
  <p class="text-white text-center" style="font-weight: bold;">En este apartado podran llenar los formularios para realizar voluntariado en el Sendero el Cornizuelo, estara el formulario individual y el grupal.</p>
  <br>
</div>
<div class="card-group">
    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.QBg_O2yBkae5ZVpUSI8v2wHaFj%26pid%3DApi&f=1" style="height: 330px;"   class="card-img-top" alt="árbol">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;">Voluntariado Individual</h2>
        <p class="card-text text-white">Al hacer click en el siguiente link, seran redireccionados al formulario de voluntariado individual del Sendero el Cornizuelo</p>
        <hr style="background-color: white;">
                <br>
     <ul class="col-md-12">
                    <li class="text-danger text-center"> <a href="{{ url('formvolind') }}" class="text-danger"> Formulario Individual</a></li>
                </ul>
      </div> 
      
    </div>

    <div class="card" style="background-color: rgb(7, 8, 88)">
      <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.QBg_O2yBkae5ZVpUSI8v2wHaFj%26pid%3DApi&f=1" style="height: 330px;" class="card-img-top" alt="Tigrillo">
      <div class="card-body">
        <h2 class="card-title text-white text-center" style="font-weight: bold;">Voluntariado Grupal</h2>
        <p class="card-text text-white">Al hacer click en el siguiente link, seran redireccionados al formulario de voluntariado grupal del Sendero el Cornizuelo</p>
        <hr style="background-color: white;">
                <br>
      <ul class="col-md-12">
                    <li class="text-danger text-center"> <a href="{{ url('formvolgrup') }}" class="text-danger"> Formulario Grupal</a></li>
                </ul>
      </div>
      
    </div>
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
                    <li class="text-white text-center"><a href="#Reservacion" class="text-white">Reservación Sendero</a></li>
                    <li class="text-white text-center"><a href="#Voluntariado" class="text-white">Voluntariado</a></li>
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
