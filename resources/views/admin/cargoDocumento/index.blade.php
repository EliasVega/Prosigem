@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Listado de Documentos</h2>

                <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#abrirmodal">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Agregar Documento
                </button>
    </div><br>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        @include('admin.cargoDocumento.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th>Id</th>
                <th>Cargo</th>
                <th>Documento</th>
                <th>Opciones</th>
                </thead>
                @foreach($cargoDocumentos as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->cargoNombre }}</td>
                    <td>{{ $car->documentoNombre }}</td>
                    <td>
                        <a href="{{ route('cargoDocumento.edit', $car->id) }}"><button class="btn btn-info">Editar</button></a>
                        <a href="{{ route('cargoDocumento.show', $car->idDocumento) }}"><button class="btn btn-info">Ingresar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!--Inicio del modal agregar-->
    <div class="modal fade" id="abrirmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-primary modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Documentos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    {!!Form::open(array('url'=>'admin/cargoDocumento', 'method'=>'POST', 'autocomplete'=>'off'))!!}
                    {!!Form::token()!!}
                    <div class="box-body">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="documento_id">Documentos</label>
                                <div class="select">
                                    <select name="documento_id" class="form-control selectpicker" data-live-search="true" id="documento_id" required>
                                        <option value="" disabled selected>Seleccionar.</option>
                                        @foreach($documentos as $doc)
                                        <option value="{{ $doc->id }}">{{ $doc->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{url('admin/cargoDocumento')}}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!--Fin del modal-->
</div>
@endsection



