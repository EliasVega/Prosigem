@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Matriz de Riesgo <a href="matrizRiesgo/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('admin.matrizRiesgo.search')
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
                <th>Area</th>
                <th>Descripcion</th>
                <th>Opciones</th>
                </thead>
                @foreach($matrizRiesgos as $mat)
                <tr>
                    <td>{{ $mat->id }}</td>
                    <td>{{ $mat->user->name }}</td>
                    <td>{{ $mat->user->cargo->nombre }}</td>
                    <td>{{ $mat->area }}</td>
                    <td>{{ $mat->descripcion }}</td>
                    <td>
                        <a href="{{ route('matrizRiesgo.edit', $mat->id) }}"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection



