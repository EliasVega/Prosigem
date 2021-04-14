@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Proceso: &nbsp;&nbsp;&nbsp;{{ $proceso->nombre }}</h3>
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
            {!!Form::model($proceso, ['method'=>'PATCH','route'=>['proceso.update', $proceso->id]])!!}
            {!!Form::token()!!}
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="nombre" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Nombre</label>
                                <div class="select col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="nombre" value="{{ $proceso->nombre }}" class="form-control" placeholder="Nombre" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="lider" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Lider</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="lider" value="{{ $proceso->lider }}" class="form-control" placeholder="Ingrese el nombre del lider del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="requisitos" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Requisitos</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="requisitos" value="{{ $proceso->requisitos }}" class="form-control" placeholder="Ingrese los requisitos del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="alcance" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Alcance</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="alcance" value="{{ $proceso->alcance }}" class="form-control" placeholder="Ingrese el alcance del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="obj_esp" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Obj. Especificos</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="obj_esp" value="{{ $proceso->obj_esp }}" class="form-control" placeholder="Ingrese los Objetivos Especificos del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="recursos" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Recursos</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="recursos" value="{{ $proceso->recursos }}" class="form-control" placeholder="Ingrese los recursos del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="salidas" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Salidas</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="salidas" value="{{ $proceso->salidas }}" class="form-control" placeholder="Ingrese las Salidas del proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group row">
                                <label for="estrategias" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label align-right">Estrategias</label>
                                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="estrategias" value="{{ $proceso->estrategias }}" class="form-control" placeholder="Ingrese las Estrategias para el proceso" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                                <a href="{{ url('admin/proceso') }}" class="btn btn-danger btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
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
