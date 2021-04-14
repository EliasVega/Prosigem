@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Usuarios
            <a href="user/create"><button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Usuario</button></a>
        @include('admin.user.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Cargo</th>
                        <th>rol</th>
                        <th>Nombre</th>
                        <th>Identificacion</th>
                        <th>Email</th>
                        <th>genero</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Estudios</th>
                        <th>P. Cargo</th>
                        <th>Estado</th>
                        <th>Ingresar</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $use)
                    <tr>
                        <td>{{ $use->id }}</td>
                        <td>{{ $use->cargo->nombre }}</td>
                        <td>{{ $use->role->rol }}</td>
                        <td>{{ $use->name }}</td>
                        <td>{{ $use->identificacion }}</td>
                        <td>{{ $use->email }}</td>
                        <td>{{ $use->genero }}</td>
                        <td>{{ $use->edad }} Años</td>
                        <td>{{ $use->telefono }}</td>
                        <td>{{ $use->nivel_educativo }}</td>
                        <td>{{ $use->personas_cargo }}</td>
                        <td>{{ $use->estado }}</td>
                        <td>
                            <a href="{{ route('user.show', $use->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-indent"></i> Ingresar</a>
                        </td>
                        <td>
                            <a href="{{route('user.edit', $use->id)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



