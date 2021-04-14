@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Convocatorias <a href="convocatoria/create"><button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Convocatoria</button></a></h3>
        @include('admin.convocatoria.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Version</th>
                        <th>fecha</th>
                        <th>Hora</th>
                        <th>Representante Legal</th>
                        <th>logo</th>
                        <th>Opciones</th>
                        <th>Descargar Pdf</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($convocatorias as $con)
                        <tr>
                            <td>{{ $con->id }}</td>
                            <td>{{ $con->codigo }}</td>
                            <td>{{ $con->nombre }}</td>
                            <td>{{ $con->version }}</td>
                            <td>{{ $con->fecha }}</td>
                            <td>{{ $con->hora }}</td>
                            <td>{{ $con->rep_legal }}</td>
                            <td>
                                <img src="{{asset('storage/img/empresa/'.$con->empresa->imagen)}}" id="imagen1" alt="{{$con->empresa->nombre}}" class="img-responsive" width="50px" height="50px">
                           </td>
                            <td>
                                <a href="{{ route('convocatoria.edit', $con->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                                <a href="{{route('convocatoria.show', $con->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> ver</a>
                            </td>
                            <td>

                                <a href="{{route('pdfConvocatoria', $con->id)}}" target="_blank">

                                   <button type="button" class="btn btn-info btn-sm">

                                     <i class="fa fa-file"></i>&nbsp;&nbsp;PDF
                                   </button> &nbsp;

                            </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $convocatorias->links() !!}
        </div>
    </div>
</div>
@endsection



