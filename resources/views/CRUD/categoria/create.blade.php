@extends('plantilla')


@section('content_header')
    <h1 class="font-weight-bold"> FORMULARIO </h1>
@stop

@section('content')

    <div class="container uper">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"> Categoria </label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="categoria" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Descripción</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" id="descripcion">
                            </div>
                        </div>


                        <div class="container-fluid h-100">
                            <div class="row w-100 align-items-center">
                                <div class="col text-center">
                                    <a class="btn btn-warning" href="{{ route('categorias.list') }}">Regresar</a>
                                    <button class="btn btn-primary" id="guardar"> Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('js')

    <script>
        $("#guardar").click(function(e) {
            e.preventDefault();
            var categoria = $('#categoria').val();
            var descripcion = $('#descripcion').val();


            var data = {
                categoria: categoria,
                descripcion: descripcion
            };

            $.ajax({
                type: "post",
                url: "{{ route('categorias.store') }}",
                data: data,
                success: function() {
                    document.getElementById("categoria").value = ""; 
                    document.getElementById("descripcion").value = ""; 
                    alert("Se ha realizado el POST con exito ");
                }
            });

        });
    </script>


@endsection
