@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Servicios <a href="servicio/create" class="btn btn-success mr-3"><i class="fa fa-plus mr-3"></i>Agregar Servicio</a></h3>
        @include('admin.servicio.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>servicio</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $ser)
                        <tr>
                            <td>{{ $ser->id }}</td>
                            <td>{{ $ser->servicio }}</td>
                            <td>
                                <a href="{{ route('servicio.edit', $ser->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $servicios->links() !!}
        </div>
    </div>
</div>
@endsection



