@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3>Documentos: {{ $cargo->nombre }}</h3>
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color: #ffff">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive">
                        <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <th style="background-color:#C0E6F3">Nombre Cargo</th>
                            <th style="background-color:#C0E6F3">Nombre Documento</th>
                            </thead>
                            <tbody>
                            @foreach($cardocs as $car)
                                <tr>
                                    <td style="background-color:#E1E9FC">{{ $car->cargoNombre }}</td>
                                    <td style="background-color:#E1E9FC">{{ $car->documentoNombre }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::model($cargo, ['method'=>'POST', 'route'=>['cargo.documento', $cargo->id]]) !!}
    {!! Form::token() !!}
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-body card-padding">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="cargo_id">Cargo</label>
                                <input type="text" name="cargo_id" id="cargo_id" value="{{ $cargo->nombre }}" class="form-control" placeholder="Cargo" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label>Documento</label>
                                <select name="documento_id" id="documento_id"
                                        class="form-control selectpicker" data-live-search="true">
                                    @foreach($documentos as $doc)
                                        <option
                                            value="{{ $doc->id }}">{{ $doc->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="btn_add"> </label>
                                <button type="button" id="btn_add" class="btn btn-primary form-control">Agregar</button>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id="pdocumento" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#C0E6F3">
                                    <tr>
                                        <th>Opciones</th>
                                        <th>Documento</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" id="guardar">Guardar</button>
                                <a href="{{ url('admin/cargo') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
@section('scripts')
        <script>

            $(document).ready(function () {
                $("#btn_add").click(function () {
                    agregar();
                })
            })

            var cont = 0;
            $("#guardar").hide();

            function agregar() {
                documento_id = $("#documento_id").val();
                documento = $("#documento_id option:selected").text();
                cargo = $("#cargo_id").val();

                if (cargo != "" && documento_id != "" && documento != "") {
                    var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ')"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="documento_id[]" value="' + documento_id + '">' + documento + '</td><td><input type="hidden" name="cargo_id[]" value="' + cargo + '"</td></tr>';
                    cont++;

                    evaluar();
                    $("#pdocumento").append(fila);
                } else {
                    alert("Error al ingresar los datos del personal, por favor revise los datos");
                }
            }

            function evaluar() {
                if (cont > 0) {
                    $("#guardar").show();
                } else {
                    $("#guardar").hide();
                }
            }


            function eliminar(index) {
                cont--;
                $("#fila" + index).remove();
                evaluar();
            }
        </script>
@endsection
