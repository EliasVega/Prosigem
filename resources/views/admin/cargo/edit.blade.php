@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Cargo: {{ $cargo->nombre }}</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($cargo, ['method'=>'PATCH','route'=>['cargo.update', $cargo->id]])!!}
            {!!Form::token()!!}
                <div class="box-body">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="nombre">Nombre del Cargo</label>
                            <input type="text" name="nombre" value="{{ $cargo->nombre }}" class="form-control" placeholder="ingrese el nombre del Cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="jefe">Jefe Inmediato</label>
                            <input type="text" name="jefe" value="{{ $cargo->jefe }}" class="form-control" placeholder="Nombre del Jefe Inmediato">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="subcargos">Cargos bajo su responsabilidad</label>
                            <input type="text" name="subcargos" value="{{ $cargo->subcargos }}" class="form-control" placeholder="Ingrese los cargos bajo su responsabilidad">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <input type="text" name="rol" value="{{ $cargo->rol }}" class="form-control" placeholder="Ingrese los roles del cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="func_cargo">Funciones del Cargo</label>
                            <input type="text" name="func_cargo" value="{{ $cargo->func_cargo }}" class="form-control" placeholder="Ingrese las Funciones del Cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="resp_cargo">Responsabilidades del Cargo</label>
                            <input type="text" name="resp_cargo" value="{{ $cargo->resp_cargo }}" class="form-control" placeholder="Ingrese las Responsabilidades del Cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="resp_sgi">Responsabilidades SGI</label>
                            <input type="text" name="resp_sgi" value="{{ $cargo->resp_sgi }}" class="form-control" placeholder="Ingrese las Responsabilidades SGI">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="autoridad">Autoridad</label>
                            <input type="text" name="autoridad" value="{{ $cargo->autoridad }}" class="form-control" placeholder="Ingrese el nombre de la autoridad del cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="rend_ctas">Rendicion de Cuentas</label>
                            <input type="text" name="rend_ctas" value="{{ $cargo->rend_ctas }}" class="form-control" placeholder="Ingrese el nombre a Rendir Cuentas">
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Competencias</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="educacion">Educacion</label>
                            <input type="text" name="educacion" value="{{ $cargo->educacion }}" class="form-control" placeholder="Ingrese la Educacion requerida del Cargo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="formacion">Formacion</label>
                            <input type="text" name="formacion" value="{{ $cargo->formacion }}" class="form-control" placeholder="Ingrese la Formacion requerida para el cardo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="experiencia">Experiencia</label>
                            <input type="text" name="experiencia" value="{{ $cargo->experiencia }}" class="form-control" placeholder="Ingrese la Experiencia requerida para el cardo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="habilidades">Habilidades</label>
                            <input type="text" name="habilidades" value="{{ $cargo->habilidades }}" class="form-control" placeholder="Ingrese la Formacion requerida para el cardo">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-pencil-alt fa-2x"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('admin/cargo') }}" class="btn btn-danger"><i class="fa fa-window-close fa-2x"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
