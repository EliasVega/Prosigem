@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Asignacion Documentos: {{ $cargoDocumento->documentoNombre }} </h3>
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
            {!!Form::model($cargoDocumento, ['method'=>'PATCH','route'=>['cargoDocumento.update', $cargoDocumento->id]])!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="documento_id">Documento</label>
                            <div class="select">
                                <select name="documento_id" class="form-control">
                                    @foreach($documentos as $doc)
                                    @if($doc->id == $cargoDocumento->documento_id)
                                    <option value="{{ $doc->id }}" selected>{{ $doc->nombre }}</option>
                                    @else
                                    <option value="{{ $doc->id }}">{{ $doc->nombre }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                            <a href="{{ url('admin/cargoDocumento') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
