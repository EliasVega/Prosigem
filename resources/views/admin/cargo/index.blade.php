@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

        <h3>Listado de Cargos <a href="cargo/create" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Cargo</a></h3>
       @include('admin.cargo.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @foreach($cargos as $car)
            <strong><h2>{{ $car->nombre }}</h2></strong>
            <p>
                <h5><strong>Jefe</strong>: {{ $car->jefe }}</h5>
                <strong>Proceso</strong>: {{ $car->proceso->nombre }}<br>
                <strong>Cargos a su mando.</strong>: {{ $car->subcargos }}<br>
                <strong>Roles del cargo</strong>: {{ $car->rol }}<br>
                <strong>Funciones del cargo</strong>: {{ $car->func_cargo }}<br>
                <strong>Responsabilidades</strong>: {{ $car->resp_cargo }}<br>
                <strong>Responsabilidades SGI</strong>: {{ $car->resp_sgi }}<br>
                <strong>Autoridad</strong>: {{ $car->autoridad }}<br>
                <strong>Rendir Cuentas</strong>: {{ $car->rend_ctas }}<br><br>
                <strong><h4>Competencias:</h4></strong><br>
                <strong>Educcion</strong>: {{ $car->educacion }}<br>
                <strong>Formacion</strong>: {{ $car->formacion }}<br>
                <strong>Expreiencia</strong>: {{ $car->experiencia }} Años<br>
                <strong>Habilidades</strong>: {{ $car->habilidades }}<br><br>

                <a href="{{route('userShow', $car->id)}}" class="btn btn-success btn-md"><i class="fas fa-indent"></i>&nbsp; Ingresar</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('createDocumento', $car->id)}}"><button class="btn btn-info btn-md"><i class="fas fa-plus"></i>&nbsp;AddDoc</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('cargo.show', $car->id)}}" class="btn btn-success btn-md"><i class="fas fa-eye"></i>&nbsp; Docs</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{route('cargo.edit', $car->id)}}" class="btn btn-warning btn-md"><i class="fa fa-edit "></i> Editar</a>
            </p><br><br>
        @endforeach
    </div>
</div>
@endsection


