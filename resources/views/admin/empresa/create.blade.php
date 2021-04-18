@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Empresa</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(array('url'=>'admin/empresa', 'method'=>'POST', 'autocomplete'=>'off', 'enctype' => 'multipart/form-data'))!!}
            {!!Form::token()!!}
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="departamento_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-control-label">Departamentos</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="departamento_id" class="form-control selectpicker" data-live-search="true" id="departamento" required>
                                        <option value="{{ old('departamento_id') }}" disabled selected>Seleccionar.</option>
                                        @foreach($departamentos as $dep)
                                            <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="municipio_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-control-label">Municipio</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="municipio_id" class="form-control" id="municipio" required>
                                        <option value ="" disabled selected>Seleccionar...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="servicio_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Servicios</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="servicio_id" class="form-control selectpicker" data-live-search="true" id="servicio" required>
                                        <option value="{{ old('servicio_id') }}" disabled selected>Seleccionar.</option>
                                        @foreach($servicios as $ser)
                                            <option value="{{ $ser->id }}">{{ $ser->servicio }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="nombre" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Nombre de la Empresa</label>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Ingrese el nombre de la Empresa">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="asesor" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Asesor</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="asesor" class="form-control selectpicker" data-live-search="true" id="asesor" required>
                                        <option value="{{ old('asesor') }}" disabled selected>Seleccionar.</option>
                                        @foreach($users as $use)
                                            <option value="{{ $use->id }}">{{ $use->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="inicio_servicio" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Inicio del Servicio</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="inicio_servicio" id="inicio_servicio"
                               value="{{ old('inicio_servicio') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="fin_servicio" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Fin el Servicio</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="fin_servicio" id="fin_servicio"
                               value="{{ old('fin_servicio') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="fecha_facturacion" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Fecha de Facturacion</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="fecha_facturacion" id="fecha_facturacion" value="{{ old('fecha_facturacion') }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="imagen" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Imagen</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="file" name="imagen" class="form-control" id="imagen" placeholder="Ingresar Imagen">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                                <a href="{{url('admin/empresa')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        /*$(document).ready(function(){
            alert('estoy funcionando correctamanete colegio');
        });*/
        $("#departamento").change(function(event){
            $.get("create/" + event.target.value + "", function(response){
                $("#municipio").empty();
                $("#municipio").append("<option value = '#' disabled selected>Seleccionar ...</option>");
                for(i = 0; i < response.length; i++){
                    $("#municipio").append("<option value = '" + response[i].id +"'>" + response[i].nombre + "</option>");
                }
            });
        });

    </script>
@endsection
