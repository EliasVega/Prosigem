@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Inspecciones <a href="inspeccion/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('admin.inspeccion.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th>Id</th>
                <th>Usuario</th>
                <th>Cargo</th>
                <th>Codigo</th>
                <th>Version</th>
                <th>Opciones</th>
                </thead>
                @foreach($inspeccions as $ins)
                <tr>
                    <td>{{ $ins->id }}</td>
                    <td>{{ $ins->user->name }}</td>
                    <td>{{ $ins->user->cargo->nombre }}</td>
                    <td>{{ $ins->codigo }}</td>
                    <td>{{ $ins->version }}</td>
                    <td>
                        <a href="{{route('inspeccion.edit', $ins->id)}}"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection



