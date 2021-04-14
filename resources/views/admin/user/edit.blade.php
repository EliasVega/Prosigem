@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Usuario: {{ $user->name }}</h3>
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
            {!!Form::model($user, ['method'=>'PATCH','route'=>['user.update', $user->id]])!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="role_id">Rol</label>
                            <div class="select">
                                <select name="role_id" class="form-control">
                                    @foreach($roles as $rol)
                                    @if($rol->id == $user->rol_id)
                                    <option value="{{ $rol->id }}" selected>{{ $rol->rol }}</option>
                                    @else
                                    <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="identificacion">Numero de Identificacion</label>
                            <input type="text" name="identificacion" value="{{ $user->identificacion }}" class="form-control" placeholder="Identificacion" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ $user->email }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="password-confirm">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <div class="select">
                                <select name="genero" id="genero" class="form-control">
                                    <option value="{{ $user->genero }}" selected disabled>Seleccionar.</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                    <option value="otro">Otros</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" name="edad" value="{{ $user->edad }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" value="{{ $user->telefono }}" class="form-control" placeholder="Ingrese numero de telefonos" required>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nivel_educativo">Nivel Educativo</label>
                            <div class="select">
                                <select name="nivel_educativo" id="nivel_educativo" class="form-control">
                                    <option value="{{ $user->nivel_educativo }}" selected disabled>Seleccionar.</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Bachillerato">Bachillerato</option>
                                    <option value="Tecnico">Tecnico</option>
                                    <option value="Universidad">Universidad</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="personas_cargo">Personas a cargo</label>
                            <input type="number" name="personas_cargo" value="{{ $user->personas_cargo }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-pencil-alt fa-2x"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('admin/user') }}" class="btn btn-danger"><i class="fa fa-window-close fa-2x"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
