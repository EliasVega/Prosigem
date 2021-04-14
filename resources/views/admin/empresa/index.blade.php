@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Empresas <a href="empresa/create" class="btn btn-success mr-3"><i class="fa fa-plus mr-3"></i>Agregar Empresa</a></h3>
        @include('admin.empresa.search')
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
                        <th>Serv.</th>
                        <th>Nombre</th>
                        <th>Asesor</th>
                        <th>Inicio</th>
                        <th>fin</th>
                        <th>Facturacion</th>
                        <th>Logo</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Ingresar</th>
                        <th>Personal</th>
                        <th>Cambiar estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empresas as $emp)
                        <tr>
                            <td>{{ $emp->id }}</td>
                            <td>{{ $emp->departamento->nombre }}</td>
                            <td>{{ $emp->municipio->nombre }}</td>
                            <td>{{ $emp->servicio->id }}</td>
                            <td>{{ $emp->nombre }}</td>
                            <td>{{ $emp->asesor }}</td>
                            <td>{{ $emp->inicio_servicio }}</td>
                            <td>{{ $emp->fin_servicio }}</td>
                            <td>{{ $emp->fecha_facturacion }}</td>
                            <td>
                                <img src="{{asset('storage/img/empresa/'.$emp->imagen)}}" id="imagen1" alt="{{$emp->nombre}}" class="img-responsive" width="50px" height="50px">
                           </td>
                            <td>
                                @if($emp->estado=="1")
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i> Activa
                                    </button>
                                @else
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <i class="fa fa-check"></i> Inactiva
                                    </button>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('empresa.edit', $emp->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                            <td>
                                <a href="{{ route('empresa.show', $emp->id) }}" class="btn btn-info btn-sm"> <i class="fa fa-indent"></i> Ingresar </a>
                            </td>
                            <td>
                                <a href="{{ route('personalShow', $emp->id) }}" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i>Personal</a>
                            </td>
                            <td>
                                @if($emp->estado)
                                    <button type="button" class="btn btn-danger btn-sm" data-id="{{$emp->id}}" data-toggle="modal" data-target="#cambiarEstado">
                                    <i class="fa fa-times"></i> Desactivar
                                    </button>
                                @else
                                    <button type="button" class="btn btn-success btn-sm" data-id="{{$emp->id}}" data-toggle="modal" data-target="#cambiarEstado">
                                    <i class="fa fa-lock"></i> Activar
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $empresas->links() !!}
        </div>
    </div>
    @include('admin.empresa.cambiarEstado')
</div>
@endsection
@section('scripts')

    <script>
        /*INICIO ventana modal para cambiar estado de Categoria*/
        $('#cambiarEstado').on('show.bs.modal', function (event) {
        //console.log('modal abierto');
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        // modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body #id').val(id);
        })
        /*FIN ventana modal para cambiar estado de la categoria*/
    </script>
@endsection
