@extends('plantilla')

@section('content')
    <div class="uper">

        <a class="btn btn-primary" href="{{ route('categorias.agregar') }} "> Agregar </a>
        <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>CATEGORÍA</td>
                    <td>DESCRIPCIÓN</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>
            <tbody id="datos">
            </tbody>
        </table>
        <div>

            <!--Modal para la edicion de datos-->
            <form id="form-actualizar" data-parsley-validate>
                @method('PUT')

                <div class="modal fade" tabindex="-1" role="dialog" id="formulario">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">FORMULARIO DE EDICIÓN</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="message-text" class="control-label">Id:</label>
                                        <input type="text" readonly class="form-control" id="idCategoria">
                                        <label for="message-text" class="control-label">Categoria:</label>
                                        <input type="text" class="form-control" id="categoria">
                                        <label for="message-text" class="control-label">Descrpción:</label>
                                        <input type="text" class="form-control" id="descripcion">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary actualizar">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endsection

        @section('js')
            <!--Carga de datos a la tabla-->
            <script type="text/javascript" src="{{ asset('js/CRUD/categoria/list.js') }}"></script>

            <!--para abrir el modal y cargar los datos a editart-->
            <script type="text/javascript">
                $(document).on('click', '.editar', function(event) {
                    id = this.id;

                    $.get('/api/categorias/' + id + '/edit', function(data) {
                        $('#formulario').modal('show');
                        $('#idCategoria').val(data.idCategoria);
                        $('#categoria').val(data.categoria);
                        $('#descripcion').val(data.descripcion);
                    });

                });
            </script>
            <!-- Para editar los valores -->
            <script type="text/javascript">
                $(document).on('click', '.actualizar', function(e) {
                    e.preventDefault();
                    var id = $('#idCategoria').val();
                    var categoria = $('#categoria').val();
                    var descripcion = $('#descripcion').val();

                    var data = {
                        "categoria": categoria,
                        "descripcion": descripcion
                    };

                    $.ajax({
                        type: "put",
                        url: "api/categorias/" + id,
                        data: data,
                        success: function(response) {
                            alert(response);
                            location.reload();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });


                });
            </script>

            <!--Para borrar un registro-->
            <script type="text/javascript">
                $(document).on('click', '.borrar', function(event) {
                    id = this.id;

                    $.ajax({
                        type: "DELETE",
                        url: "api/categorias/" + id,

                        success: function(response) {
                            alert(response);
                            location.reload();
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                });
            </script>
        @endsection
