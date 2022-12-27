<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ejercicios de Wendy</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <style>
        .uper {

            margin-top: 40px;
        }
    </style>
</head>

<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Wendy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('categorias.list') }} " > CRUD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('palindromo') }} " >PALINDROMO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('burbuja') }} ">BURBUJA</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

    <script src="{{  asset('js/app.js') }}" type="text/js"></script>


    @yield('css')
    @yield('js')

</body>

</html>
