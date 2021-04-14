@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado Documento Politicas <a href="politica/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('admin.politica.search')
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
                <th>Titulo</th>
                <th>Contenido</th>
                <th>Opciones</th>
                </thead>
                @foreach($politicas as $pol)
                <tr>
                    <td>{{ $pol->id }}</td>
                    <td>{{ $pol->user->name }}</td>
                    <td>{{ $pol->user->cargo->nombre }}</td>
                    <td>{{ $pol->titulo }}</td>
                    <td>{{ $pol->contenido }}</td>
                    <td>
                        <a href="{{route('politica.edit', $pol->id)}}"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection



