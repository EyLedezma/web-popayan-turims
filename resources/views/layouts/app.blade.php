<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-5">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('popayan', 'Popayan turims') }}</title>

    <!-- Scripts -->
  
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script src="js/index.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- CSS Main -->
    <link rel="stylesheet" href="./css/main.css" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm ">
    
                <a class="navbar-brand text-danger" href="{{ url('/') }}">
                    {{ config('popayán', 'Popayán Turims') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- aqui las rutas --> 
                    <ul class="navbar-nav me-auto ">
                      
                      
                  
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('iglesias') }}">{{ __('Iglesias') }}</a>

                          
    
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('hoteles.index') }}">{{ __('Hoteles') }}</a>
                            <li class="nav-item   text-white">
                            <a class="nav-link  text-white" href="{{ route('museos.index') }}">{{ __('Museos') }}</a>
                            <li class="nav-item  text-white">
                                <a class="nav-link  text-white" href="{{ route('senderismo.index') }}">{{ __('Senderismo') }}</a>
                        </li>  


                        

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <button  type="submit" class="btn btn-outline-primary mb-4 button_color">
                       
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
   
                          {{-- </button> --}}
                            @endif
                            @if (Route::has('register'))
                            <button type="submit" class="btn btn-outline-primary mb-4 button_color">

                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </button>
                              
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('NuevaContraseña') }}">                
                                     {{ __('Editar Perfil') }}
                                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
           </nav>
    </div>
        

            @yield('content')
     

    

    {{-- Footer  pie de pagina --}}
<footer class="text-center text-lg-start  text-muted color-fondo p-2">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block  ">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>popáyan turims
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           Nosotros
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 ">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4 ">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contactos
          </h6>
          <p><i class="fas fa-home me-3"></i> Popayan, 10012, COL</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            Popayan-turims.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</body>
</html>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Popayan-turims.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('js')




