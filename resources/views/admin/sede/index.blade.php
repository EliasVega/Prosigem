@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Sede
            <a href="sede/create" class="btn btn-success mr-3"><i class="fa fa-plus mr-3"></i>Agregar Sede</a>
        </h3>
        @include('admin.sede.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Departamento</th>
                        <th>Municipio</th>
                        <th>Empresa</th>
                        <th>nombre</th>
                        <th>nit</th>
                        <th>direccion</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Riesgo</th>
                        <th>Gerente</th>
                        <th>Act. Economica.</th>
                        <th>Arl</th>
                        <th>Editar</th>
                        <th>Ingresar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sedes as $sed)
                        <tr>
                            <td>{{ $sed->id }}</td>
                            <td>{{ $sed->departamento->nombre }}</td>
                            <td>{{ $sed->municipio->nombre }}</td>
                            <td>{{ $sed->empresa->nombre }}</td>
                            <td>{{ $sed->nombre }}</td>
                            <td>{{ $sed->nit }}</td>
                            <td>{{ $sed->direccion }}</td>
                            <td>{{ $sed->telefono }}</td>
                            <td>{{ $sed->celular }}</td>
                            <td>{{ $sed->nivel_riesgo }}</td>
                            <td>{{ $sed->gerente }}</td>
                            <td>{{ $sed->actividadEconomica_id }}</td>
                            <td>{{ $sed->arl->nombre }}</td>
                            <td>
                                <a href="{{ route('sede.edit', $sed->id) }" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </th>
                            <th>
                                <a href="{{ route('sede.show', $sed->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-indent"></i> Ingresar </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
