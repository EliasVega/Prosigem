@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Documento Inspeccion: {{ $inspeccion->codigo }}</h3>
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
            {!!Form::model($inspeccion, ['method'=>'PATCH','route'=>['inspeccion.update', $inspeccion->id]])!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" name="codigo" class="form-control" value="{{ $inspeccion->codigo }}" placeholder="Codigo">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label for="version">Version</label>
                            <input type="text" name="version" class="form-control" value="{{ $inspeccion->version }}" placeholder="Version">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{ url('admin/inspeccion') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
