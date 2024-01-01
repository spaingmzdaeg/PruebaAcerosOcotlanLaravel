<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard</title>

  <!-- Scripts -->
  <script src="{{ asset('/assets/dist/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('/assets/dist/css/bootstrap.min.css') }}">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <header
      class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="assets/brand/LogotipoAcerosOcotlan.png" alt="">

      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Productos</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Precios</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Preguntas</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Sobre nosotros</a></li>
      </ul>

    @if (Route::has('login'))
      <div class="col-md-4 text-end">
        @auth
          <a type="button" class="btn btn-outline-secondary" href="{{ url('/dashboard') }}">Ir a ABCC</a>
        @else  
          <a type="button" class="btn btn-outline-primary me-2" href="{{ route('login') }}">Ingresar</a>
          @if (Route::has('register'))
            <a type="button" class="btn btn-primary" href="{{ route('register') }}">Registrarse</a>
          @endif         
        @endauth
      </div>
    @endif  

      <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/brand/LogotipoAcerosOcotlan.png" alt="" width="145" height="57">
        <h1 class="display-5 fw-bold">Test Aceros Ocotlan</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Prueba tecnica de desarrollo , ABCC desarrollado en framework laravel php despleglando en
            un contenedor y usando SQLServer para el gestionamiento de dos catalogos , el de colaboradores y el de
            departamentos ,</p>
          @if (Route::has('login'))
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              @auth
                <a type="button" class="btn btn-primary btn-lg px-4 gap-3" href="{{ url('/dashboard') }}">Ir a ABCC</a>
              @else  
                <a type="button" class="btn btn-outline-secondary btn-lg px-4" href="{{ route('login') }}">Ingresar</a>
                @if (Route::has('register'))
                  <a type="button" class="btn btn-outline-secondary btn-lg px-4" href="{{ route('register') }}">Registrarse</a>
                @endif
              @endauth
            </div>
          @endif
        </div>
      </div>
    </header>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">


    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2024 Copyright:
      <a class="text-reset fw-bold" href="#">Daniel Alejandro Espana Gomez</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>

</html>