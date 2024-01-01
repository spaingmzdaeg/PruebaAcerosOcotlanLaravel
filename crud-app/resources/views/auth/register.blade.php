<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register</title>
    

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

    
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    

 

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
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

      <div class="col-md-3 text-end">
        <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary me-2">Ingresar</a>
        <a href="{{ route('register') }}" type="button" class="btn btn-primary">Registrarse</a>
      </div>


      <div class="container">
        <main>
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/brand/LogotipoAcerosOcotlan.png" alt="" width="132" height="57">
            <h2>Formulario de registro</h2>
            <p class="lead">Llene los siguientes campos para el correcto registro del usuario</p>
          </div>
      
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row g-5">
            
                <div class="col-md-7 col-lg-8">
                  <h4 class="mb-3">Registrarse</h4>
                  <form class="needs-validation" novalidate>
                    <div class="row g-3">
                      <div class="col-6">
                        <label for="firstName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="firstName" name="name" placeholder="" value="" required>
                        <div>
                            @foreach ($errors->get('name') as $error)
                              <div>{{ $error }}</div>
                            @endforeach
                            
                        </div>
                      </div>                      
          
                      <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                        <div>
                            @foreach ($errors->get('email') as $error)
                            <div>{{ $error }}</div>
                            @endforeach        
                        </div>
                      </div>
    
                      <div class="col-6">
                        <label for="password" class="form-label">Contrasena<span class="text-muted"></span></label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div>
                            @foreach ($errors->get('password') as $error)
                            <div>{{ $error }}</div>
                            @endforeach        
                        </div>
                      </div>
                                  
                      <div class="col-6">
                        <label for="password" class="form-label">Confirmar Contrasena<span class="text-muted"></span></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        <div>
                            @foreach ($errors->get('password_confirmation') as $error)
                            <div>{{ $error }}</div>
                            @endforeach        
                        </div>
                      </div>
    
                      <div class="col-6">
                        <a href="{{ route('login') }}">Ya cuento con una cuenta</a>
                      </div>
          
                      
          
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Registrarse</button>
                  </form>
                </div>
              </div>
          </form>
        </main>
      
      
        </footer>
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
