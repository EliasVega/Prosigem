@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado Documento Programas <a href="programa/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('admin.programa.search')
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
                <th>Introduccion</th>
                <th>Opciones</th>
                </thead>
                @foreach($programas as $pro)
                <tr>
                    <td>{{ $pro->id }}</td>
                    <td>{{ $pro->user->name }}</td>
                    <td>{{ $pro->user->cargo->nombre }}</td>
                    <td>{{ $pro->titulo }}</td>
                    <td>{{ $pro->introduccion }}</td>
                    <td>
                        <a href="{{route('programa.edit', $pro->id)}}"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection



