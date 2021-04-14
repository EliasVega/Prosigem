@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Departamentos <a href="departamento/create"><button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Departamento</button></a></h3>
        @include('admin.departamento.search')
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
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departamentos as $dep)
                        <tr>
                            <td>{{ $dep->id }}</td>
                            <td>{{ $dep->nombre }}</td>
                            <td>
                                <a href="{{ route('departamento.edit', $dep->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-0x"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $departamentos->links() !!}
        </div>
    </div>
</div>
@endsection



