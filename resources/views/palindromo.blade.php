@extends('plantilla')


@section('content_header')
    <h1 class="font-weight-bold"> PALINDROMO </h1>
@stop

@section('content')

   

    <div class="card uper">

        <div class="card-body">

            <div class="form-group">
                <label for="Palabra">Ingrese una palabra:</label>
                <input type="text" class="form-control" id="Palabra" name="Palabra" />
                <strong> <span class="" id="Validacion"></span></strong>
                
            </div>
            <br>
            <button type="button" onclick="palindromo()" class="btn btn-primary">Revisar</button>

        </div>

    </div>

@endsection


@section('js')
    <script type="text/javascript">
        function palindromo() {

            //Obtengo el valor del input con el id Palabra
            var palabra = document.getElementById("Palabra").value;

            var mensaje = document.getElementById("Validacion"); //Se establece el campo para el mensaje

            if (palabra === '') { //Validacion de campo vacio

                mensaje.className = "text-danger"
                mensaje.innerHTML = "No se permite campos vacios" // Mensaje

                return false;

            } else {
                
                //Se convierte los valores que tienen acentos
                cadena = Acentos(palabra);

                //Conversión de la palabra a letras minusculas y se remplazan
                minuscula = cadena.toLowerCase().replace(/[\W_]/g, "");

                var cantidad = minuscula.length;

                const girar = minuscula.split("").reverse().join("");

                if (minuscula != girar) {

                    mensaje.className = "secondary";
                    mensaje.innerHTML = "No es palindromo";

                } else {

                    mensaje.className = "text-success";
                    mensaje.innerHTML = "Es un Palindromo";

                }
                return true; //
            }

        }

        function Acentos(palabra) {
            // Remplazamos los acentos
            palabra = palabra.replace(/á/gi, "a");
            palabra = palabra.replace(/é/gi, "e");
            palabra = palabra.replace(/í/gi, "i");
            palabra = palabra.replace(/ó/gi, "o");
            palabra = palabra.replace(/ú/gi, "u");
            return palabra;
        }
    </script>


@endsection
