@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Sede de: &nbsp;&nbsp;&nbsp;{{ $sede->nombre }}</h3>
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
            {!!Form::model($sede, ['method'=>'PATCH','route'=>['sede.update', $sede->id]])!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" value="{{ $sede->nombre }}" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="departamento_id">Departamento</label>
                            <div class="select">
                                <select name="departamento_id" class="form-control">
                                    @foreach($departamentos as $dep)
                                    @if($dep->id == $sede->departamento_id)
                                    <option value="{{ $dep->id }}" selected>{{ $dep->nombre }}</option>
                                    @else
                                    <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="municipio_id">Municipio</label>
                            <div class="select">
                                <select name="municipio_id" class="form-control">
                                    @foreach($municipios as $mun)
                                    @if($mun->id == $sede->municipio_id)
                                    <option value="{{ $mun->id }}" selected>{{ $mun->nombre }}</option>
                                    @else
                                    <option value="{{ $mun->id }}">{{ $mun->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="direccion">Direccion Sede</label>
                            <input type="text" name="nit" value="{{ $sede->direccion }}" class="form-control" placeholder="Ingrese La Direccion" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nit">Nit</label>
                            <input type="text" name="nit" value="{{ $sede->nit }}" class="form-control" placeholder="Nit" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="actividadEconomica_id">Actividad Economica</label>
                            <div class="select">
                                <select name="actividadEconomica_id" class="form-control">
                                    @foreach($actividadEconomicas as $act)
                                    @if($act->id == $sede->actividadEconomica_id)
                                    <option value="{{ $act->id }}" selected>{{ $act->codigo }}</option>
                                    @else
                                    <option value="{{ $act->id }}">{{ $act->codigo }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="arl_id">Arl</label>
                            <div class="select">
                                <select name="srl_id" class="form-control">
                                    @foreach($arls as $arl)
                                    @if($arl->id == $sede->arl_id)
                                    <option value="{{ $arl->id }}" selected>{{ $arl->nombre }}</option>
                                    @else
                                    <option value="{{ $arl->id }}">{{ $arl->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nivel_riesgo">Nivel de riesgo</label>
                            <div class="select">
                                <select name="nivel_riesgo" id="nivel_riesgo" class="form-control">
                                    <option value="">Seleccionar.</option>
                                    <option value="1">Muy bajo</option>
                                    <option value="2">Bajo</option>
                                    <option value="3">Medio</option>
                                    <option value="4">Alto</option>
                                    <option value="5">Muy Alto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="telefono">Telefono Sede</label>
                            <input type="text" name="telefono" value="{{ $sede->telefono }}" class="form-control" placeholder="Ingrese el numero de telefono fijo" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="celular">Celular Sede</label>
                            <input type="text" name="celular" value="{{ $sede->celular }}" class="form-control" placeholder="Ingrese el numero Celular" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="gerente">Gerente o Administrador</label>
                            <input type="text" name="gerente" value="{{ $sede->gerente }}" class="form-control" placeholder="Nombre del Gerente o Administrador" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('admin/sede') }}" class="btn btn-danger btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
