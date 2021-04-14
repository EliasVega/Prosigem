@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title mb-3">Editar Municipio de: {{ $municipio->nombre }}</h3>
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
            {!!Form::model($municipio, ['method'=>'PATCH','route'=>['municipio.update', $municipio->id]])!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="departamento_id">Departamento</label>
                            <div class="select">
                                <select name="departamento_id" class="form-control">
                                    @foreach($departamentos as $dep)
                                    @if($dep->id == $municipio->departamento_id)
                                    <option value="{{ $dep->id }}" selected>{{ $dep->nombre }}</option>
                                    @else
                                    <option value="{{ $dep->id }}">{{ $dep->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Municipio</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $municipio->nombre }}" placeholder="Municipio">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('admin/municipio') }}" class="btn btn-danger btn-md"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
