@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Proceso</h3>
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
            {!!Form::open(array('url'=>'admin/proceso', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="nombre" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Nombre</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Nombre" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="lider" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Lider</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <input type="text" name="lider" value="{{ old('lider') }}" class="form-control" placeholder="Ingrese el nombre del lider del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="requisitos" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Requisitos del Proceso</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <textarea type="text" name="requisitos" rows="3" value="{{ old('requisitos') }}" class="form-control" placeholder="Ingrese los requisitos del proceso" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="alcance" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Alcance del Proceso</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <textarea type="text" name="alcance" rows="3" value="{{ old('alcance') }}" class="form-control" placeholder="Ingrese el alcance del proceso" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="obj_esp" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Objetivos Especificos</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <textarea type="text" name="obj_esp" rows="3" value="{{ old('obj_esp') }}" class="form-control" placeholder="Ingrese los Objetivos Especificos del proceso" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="recursos" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Recursos del Proceso</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <textarea type="text" name="recursos" rows="3" value="{{ old('recursos') }}" class="form-control" placeholder="Ingrese los recursos del proceso" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="salidas" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Salidas del Proceso</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <textarea type="text" name="salidas" rows="3" value="{{ old('salidas') }}" class="form-control" placeholder="Ingrese las Salidas del proceso" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="estrategias" class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-form-label">Estrategias del Proceso</label>
                                <div class="select col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                    <textarea type="text" name="estrategias" rows="3" value="{{ old('estrategias') }}" class="form-control" placeholder="Ingrese las Estrategias para el proceso" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save fa-2x"></i>&nbsp; Guardar</button>
                                <a href="{{url('admin/proceso')}}" class="btn btn-danger btn-md"><i class="fa fa-window-close fa-2x"></i>&nbsp; Cancelar</a>
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
