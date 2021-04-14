@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Arls <a href="arl/create" class="btn btn-success mr-3"><i class="fa fa-plus mr-3"></i>Agregar Arl</button></a></h3>
        @include('admin.arl.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Id</th>
                        <th>Arl</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($arls as $arl)
                        <tr>
                            <td>{{ $arl->id }}</td>
                            <td>{{ $arl->nombre }}</td>
                            <td>
                                <a href="{{ route('arl.edit', $arl->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



