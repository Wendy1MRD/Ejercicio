@extends('plantilla')


@section('content_header')
    <h1 class="font-weight-bold"> BURBUJA </h1>
@stop

@section('content')


<!--Cuerpo del metodo burbuja -->
    <div class="card uper">

        <div class="card-body">

            <label for="message-text" class="control-label">Cadena sin ordenar</label>
            <input type="text" readonly class="form-control" id="cadenaOriginal">
            <br>
            <label for="message-text" class="control-label">Cadena Ordenada </label>
            <input type="text" readonly class="form-control" id="cadenaOrdenada">

        </div>



    </div>
@endsection

@section('js')

    <script>
        var unalista = [54, 26, 93, 17, 77, 31, 44, 55, 20];

        $('#cadenaOriginal').val(unalista);

        var n, i, k, aux;
        n = unalista.length;
        // Mostramos, por consola, la lista desordenada
        // Algoritmo de burbuja
        for (k = 1; k < n; k++) {
            for (i = 0; i < (n - k); i++) {
                if (unalista[i] > unalista[i + 1]) {
                    aux = unalista[i];
                    unalista[i] = unalista[i + 1];
                    unalista[i + 1] = aux;
                }
            }
        }

        $('#cadenaOrdenada').val(unalista); // Mostramos, por consola, la lista ya ordenada
    </script>


@endsection
