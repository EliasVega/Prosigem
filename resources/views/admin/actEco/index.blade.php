@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Actividades Economicas </h3>
        @include('admin.actEco.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="bg-success">
                        <th>Codigo</th>
                        <th>descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actEcos as $act)
                        <tr>
                            <td>{{ $act->codigo }}</td>
                            <td>{{ $act->descripcion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $actEcos->links() !!}
        </div>
    </div>
</div>
@endsection



