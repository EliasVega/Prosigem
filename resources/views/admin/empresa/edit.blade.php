@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar la Empresa: &nbsp;&nbsp;&nbsp;&nbsp;{{ $empresa->nombre }}</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($empresa, ['enctype' => "multipart/form-data", 'method'=>'PATCH','route'=>['empresa.update', $empresa->id]])!!}
            {!!Form::token()!!}
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="departamento_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Departamentos</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="departamento_id" class="form-control" id="departamento_id">
                                        @foreach($departamentos as $dep)
                                            @if($dep->id == $empresa->departamento_id)
                                                <option value="{{ $dep->id }}" selected>{{ $dep->nombre }}</option>
                                            @else
                                                <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="municipio_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Municipio</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="municipio_id" class="form-control" id="municipio" required>
                                        @foreach($municipios as $mun)
                                            @if($mun->id == $empresa->municipio_id)
                                                <option value="{{ $mun->id }}" selected>{{ $mun->nombre }}</option>
                                            @else
                                                <option value="{{ $mun->id }}">{{ $mun->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="servicio_id" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Servicios</label>
                                <div class="select col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <select name="servicio_id" class="form-control" id="servicio_id">
                                        @foreach($servicios as $ser)
                                            @if($ser->id == $empresa->servicio_id)
                                                <option value="{{ $ser->id }}" selected>{{ $ser->nombre }}</option>
                                            @else
                                                <option value="{{ $ser->id }}">{{ $ser->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="nombre" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Nombre de la Empresa</label>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <input type="text" name="nombre" value="{{ $empresa->nombre }}" class="form-control" placeholder="Ingrese el nombre de la Empresa">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="asesor" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Nombre de la Empresa</label>
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <input type="text" name="asesor" value="{{ $empresa->asesor }}" class="form-control" placeholder="Ingrese el nombre del asesor">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="inicio_servicio" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Inicio del Servicio</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="inicio_servicio" id="inicio_servicio"
                               value="{{ $empresa->inicio_servicio }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="fin_servicio" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Fin el Servicio</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="fin_servicio" id="fin_servicio"
                               value="{{ $empresa->fin_servicio }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="fecha_facturacion" class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-form-label">Fecha de Facturacion</label>
                                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                    <input type="date" name="fecha_facturacion" id="fecha_facturacion" value="{{ $empresa->fecha_facturacion }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" name="imagen" class="form-control" id="imagen" value="{{ $empresa->imagen }}" placeholder="Ingresar Imagen">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                                <a href="{{url('admin/departamento')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
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
