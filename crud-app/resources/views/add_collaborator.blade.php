<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Add Collaborator</title>

     <!-- Scripts -->
    <script src="{{ asset('/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/scripts/modalData.js') }}"></script>

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

      <div class="container">
        <main>
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="assets/brand/LogotipoAcerosOcotlan.png" alt="" width="132" height="57">
            <h2>Formulario de registro</h2>
            <p class="lead">Llene los siguientes campos para el correcto registro del colaborador</p>
          </div>      
          <div class="row g-5">

            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Agregar Colaborador</h4>
              
                <div class="row g-3">
                  <div class="col-6">
                    <label for="firstName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="fill_first_name" name="fill_first_name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Aqui debe aparecer el feedback
                    </div>
                  </div>
                  
                  <div class="col-6">
                    <label for="lastName" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" id="fill_last_name" name="fiLL_last_name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Aqui debe aparecer el feedback
                    </div>
                  </div>
                  
                  <div class="col-6">
                    <label for="seconPerName" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" id="fill_second_surname" name="fill_second_surname" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Aqui debe aparecer el feedback
                    </div>
                  </div>   

                  <div class="col-6">
                    <label for="rfc" class="form-label">RFC</label>
                    <input type="text" class="form-control" id="fill_rfc" name="fill_rfc" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Aqui debe aparecer el feedback
                    </div>
                  </div>
                  
                  <div class="col-6">
                    <label for="department" class="form-label">Departamento</label>
                    
                        <select name="fill_department" id="fill_department">
                            @foreach ($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                    </select>
                  </div>                        
                <button id="add-button" class="w-100 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modal-add-collaborator">Agregar</button>
              
            </div>
          </div>
        </main>
 
  <!-- Modal -->
  <div class="modal fade" id="modal-add-collaborator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmar Colaborador</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('storecollaborator')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <h5>Nombre: <span id="get-first-name"></span></h5>
                <input type="hidden" id="first_name" name="first_name">
                <h5>Primer Apellido: <span id="get-last-name"></span></h5>
                <input type="hidden" id="last_name" name="last_name">
                <h5>Segundo Apellido: <span id="get-second-surname"></span></h5>
                <input type="hidden" id="second_surname" name="second_surname">
                <h5>RFC: <span id="get-rfc"></span></h5>
                <input type="hidden" id="rfc" name="rfc">
                <h5>Departamento: <span id="get-department-name"></span></h5>
                <input type="hidden" id="department_id" name="department_id">
                <div>
                    @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                <br>          
            </div>               
            <div class="modal-footer">
            <button id="btn-cancel" type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </form>
      </div>
    </div>
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
