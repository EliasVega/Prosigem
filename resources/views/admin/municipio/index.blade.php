@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Municipios <a href="municipio/create" class="btn btn-success mb-3"><i class="fa fa-plus"></i> Agregar Municipio</a></h3>
        @include('admin.municipio.search')
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
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($municipios as $mun)
                        <tr>
                            <td>{{ $mun->id }}</td>
                            <td>{{ $mun->departamento->nombre }}</td>
                            <td>{{ $mun->nombre }}</td>
                            <td>
                                <a href="{{ route('municipio.edit', $mun->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $municipios->links() !!}
        </div>
    </div>
</div>
@endsection



