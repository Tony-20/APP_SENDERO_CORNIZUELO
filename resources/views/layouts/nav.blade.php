<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sendero Cornizuelo</title>
          
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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

  <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
