@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Agregar Convocatoria</h3>
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
            {!!Form::open(array('url'=>'admin/convocatoria', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Nombre de Convocatoria</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Ingrese el nombre de la convocatoria">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="version">Version</label>
                            <input type="text" name="version" id="version" value="{{ old('version') }}" class="form-control" placeholder="Version">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" class="form-control" placeholder="Ingrese la Fecha en que se realizara la votacion">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="hora">Hora de citacion</label>
                            <input type="text" name="hora" id="hora"  value="{{ old('hora') }}" class="form-control" placeholder="Ingrese la hora en que se realizara la actividad">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="rep_legal">Representante Legal</label>
                            <input type="text" name="rep_legal" id="rep_legal" value="{{ old('rep_legal') }}" class="form-control" placeholder="Ingrese el nombre del Representante Legal">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save fa-2x"></i>&nbsp; Guardar</button>
                        <a href="{{url('admin/convocatoria')}}" class="btn btn-danger btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
