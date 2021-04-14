@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Procesos <a href="proceso/create"><button class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Proceso</button></a></h3>
        @include('admin.proceso.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @foreach($procesos as $pro)
            <h4><strong>Sede</strong>: {{ $pro->sede->nombre }}</h4>
            <strong><h2>{{ $pro->nombre }}</h2></strong>
            <p>
                <h5><strong>Lider</strong>: {{ $pro->lider }}</h5><br>
                <strong>Rquisitos</strong>: {{ $pro->requisitos }} <br>
                <strong>Alcance</strong>: {{ $pro->alcance }} <br>
                <strong>Objetivos especificos</strong>: {{ $pro->obj_esp }} <br>
                <strong>Recursos</strong>: {{ $pro->recursos }} <br>
                <strong>Salidas</strong>: {{ $pro->salidas }} <br>
                <strong>Estrategias</strong>: {{ $pro->estrategias }} <br><br>
                <a href="{{ route('proceso.edit', $pro->id) }}" class="btn btn-warning btn-md"><i class="fa fa-edit"></i> Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('proceso.show', $pro->id) }}" class="btn btn-info btn-md"> <i class="fa fa-indent"></i> Ingresar </a>
            </p><br><br>
        @endforeach
    </div>
</div>
@endsection



