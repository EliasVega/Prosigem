@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar la Convocatoria: &nbsp;&nbsp;&nbsp;&nbsp;{{ $convocatoria->nombre }}</h3>
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
            {!!Form::model($convocatoria, ['method'=>'PATCH','route'=>['convocatoria.update', $convocatoria->id]])!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Nombre de Convocatoria</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $convocatoria->nombre }}" class="form-control" placeholder="Ingrese el nombre de la convocatoria">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="version">Version</label>
                            <input type="text" name="version" id="version" value="{{ $convocatoria->version }}" class="form-control" placeholder="Version">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{ $convocatoria->fecha }}" class="form-control" placeholder="Ingrese la Fecha en que se realizara la votacion">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="hora">Hora de citacion</label>
                            <input type="text" name="hora" id="hora" value="{{ $convocatoria->hora }}" class="form-control" placeholder="Ingrese la hora en que se realizara la actividad">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="rep_legal">Representante Legal</label>
                            <input type="text" name="rep_legal" id="rep_legal" value="{{ $convocatoria->rep_legal }}" class="form-control" placeholder="Ingrese el nombre del Representante Legal">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('admin/convocatoria') }}" class="btn btn-danger btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
