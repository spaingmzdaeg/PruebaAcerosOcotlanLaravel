<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>ABCC</title>
 

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


      <form action="{{ route('logout') }}" method="post">
        @csrf
        <div class="col-md-3 text-end">
            <button type="submit" class="btn btn-primary">Salir</button>
          </div>
      </form>

      <br>

      <div class="text-start">

        @if(session()->has('message'))
          <div class="alert alert-success">
            {{ session()->get('message') }}
          </div>
        @endif

      </div>

      <div class="container">
        <div class="text-end">
            <a href="{{ route('addcollaborator') }}" class="btn btn-success">Agregar Colaborador</a>
        </div>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">RFC</th>
                <th scope="col">Departamento</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach($collaborators as $collaborator)  
              <tr>               
                <td>{{ $collaborator->id }}</td>
                <td>{{ $collaborator->first_name }} {{ $collaborator->second_surname }}  {{ $collaborator->last_name }}</td>
                <td>{{ $collaborator->rfc }}</td>
                <td>{{ $collaborator->name }}</td>
                <td><a href="{{ route('deletecollaborator', $collaborator->id) }}" class="btn btn-danger">Eliminar</a></td>                
              </tr>
            @endforeach
            </tbody>
          </table>
      </div>      
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
