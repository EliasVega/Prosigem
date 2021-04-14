@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Nuevo Cargo</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(array('url'=>'admin/cargo', 'method'=>'POST', 'autocomplete'=>'off', 'files' => 'true')) !!}
            {!! Form::token() !!}
                <div class="box-body row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="nombre" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Cargo</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="ingrese el nombre del Cargo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="jefe" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Jefe</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="jefe" id="jefe" value="{{ old('jefe') }}" class="form-control" placeholder="Nombre del Jefe Inmediato">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="subcargos" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Cargos a su resp.</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="subcargos" id="subcargos" value="{{ old('subcargos') }}" class="form-control" placeholder="Ingrese los cargos bajo su responsabilidad">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="rol" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Roles</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="rol" id="rol" value="{{ old('rol') }}" class="form-control" placeholder="Ingrese los roles del cargo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="func_cargo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Funciones</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="func_cargo" id="func_cargo" value="{{ old('func_cargo') }}" class="form-control" placeholder="Ingrese las Funciones del Cargo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="resp_cargo" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Responsabilidades</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="resp_cargo" id="resp_cargo" value="{{ old('resp_cargo') }}" class="form-control" placeholder="Ingrese las Responsabilidades del Cargo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="resp_sgi" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Responsabilidades SGI</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="resp_sgi" id="resp_sgi" value="{{ old('resp_sgi') }}" class="form-control" placeholder="Ingrese las Responsabilidades SGI">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="autoridad" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Autoridad</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="autoridad" id="autoridad" value="{{ old('autoridad') }}" class="form-control" placeholder="Ingrese el nombre de la autoridad del cargo">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="rend_ctas" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Rendicion de Cuentas</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="rend_ctas" id="rend_ctas" value="{{ old('rend_ctas') }}" class="form-control" placeholder="Ingrese el nombre a Rendir Cuentas">
                            </div>
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Competencias</h3>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="educacion" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Educacion</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <div class="select">
                                    <select name="educacion" id="educacion" class="form-control">
                                        <option value="" selected disabled>Seleccionar.</option>
                                        <option value="Primaria">Primaria</option>
                                        <option value="Bachillerato">Bachillerato</option>
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Universidad">Universidad</option>
                                        <option value="Posgrado">Posgrado</option>
                                        <option value="Magister">Magister</option>
                                        <option value="Doctorado">Doctorado</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="formacion" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Formacion</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <div class="select">
                                    <select name="formacion" id="formacion" class="form-control">
                                        <option value="" selected disabled>Seleccionar.</option>
                                        <option value="Tecnico">Tecnico</option>
                                        <option value="Profesional">Profesional</option>
                                        <option value="Especialista">Especialista</option>
                                        <option value="Master">Master</option>
                                        <option value="Doctor">Doctor</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="experiencia" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Experiencia</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="number" name="experiencia" id="experiencia" value="{{ old('experiencia') }}" class="form-control" placeholder="Ingrese la Experiencia requerida para el cargo en años">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                            <label for="habilidades" class="col-lg-2 col-md-2 col-sm-3 col-xs-12 col-form-label">Habilidades</label>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                <input type="text" name="habilidades" id="habilidades" value="{{ old('habilidades') }}" class="form-control" placeholder="Ingrese la Formacion requerida para el cardo">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Agregar Personal del Cargo</h3>
                            </div>
                        </div>
                    </div>





                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="role_id">Rol</label>
                            <div class="select">
                                <select name="role_id" class="form-control selectpicker" data-live-search="true" id="role_id">
                                    <option value="" disabled selected>Seleccionar.</option>
                                    @foreach($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->rol }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="identificacion">Numero Identificacion</label>
                            <input type="text" name="identificacion" id="identificacion" value="{{ old('identificacion') }}" class="form-control" placeholder="Identificacion" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" placeholder="Email" >
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
                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                   placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-right">Confirmar
                                Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                   placeholder="Confirmar Password" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <div class="select">
                                <select name="genero" id="genero" class="form-control">
                                    <option value="" selected disabled>Seleccionar.</option>
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
                            <input type="number" name="edad" id="edad" value="{{ old('edad') }}" class="form-control" placeholder="Ingrese la edad en años" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" id="telefono" value="{{ old('telefono') }}" class="form-control" placeholder="Ingrese numero de telefono" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="nivel_educativo">Nivel Educativo</label>
                            <div class="select">
                                <select name="nivel_educativo" id="nivel_educativo" class="form-control">
                                    <option value="" selected disabled>Seleccionar.</option>
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
                            <input type="number" name="personas_cargo" id="personas_cargo" value="{{ old('personas_cargo') }}" class="form-control" placeholder="Personas a cargo">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="btn_add"> Agregar Persona a la lista </label>
                            <button type="button" id="btn_add" class="btn btn-success form-control">Agregar</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="personal" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color:#C0E6F3">

                                        <th>Opciones</th>
                                        <th>rol</th>
                                        <th>Nombre</th>
                                        <th>Identificacion</th>
                                        <th>Email</th>
                                        <th>Edad</th>
                                        <th>Estudios</th>

                                </thead>
                                <tfoot>

                                        <th>Opciones</th>
                                        <th>rol</th>
                                        <th>Nombre</th>
                                        <th>Identificacion</th>
                                        <th>Email</th>
                                        <th>Edad</th>
                                        <th>Estudios</th>

                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button class="btn btn-primary" type="submit" id="guardar"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                            <a href="{{url('admin/cargo')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
                $("#btn_add").click(function () {
                    agregar();
                })
            })

            var cont = 0;
            $("#guardar").hide();

            function agregar() {
                role_id = $("#role_id").val();
                rol = $("#role_id option:selected").text();
                name = $("#name").val();
                identificacion = $("#identificacion").val();
                email = $("#email").val();
                passWord = $("#password").val();
                cpassword = $("#password-confirm").val();
                genero = $("#genero").val();
                cgenero = $("#genero option:selected").text();
                edad = $("#edad").val();
                telefono = $("#telefono").val();
                nivel_edu = $("#nivel_educativo").val();
                nivel = $("nivel_educativo option:selected").text();
                per_cargo = $("#personas_cargo").val();

                if (role_id != "" && name != "" && identificacion != "" && email != "" && edad != "" && nivel_edu != "") {

                    var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ')"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="id[]" value="' + cont + '"></td><td><input type="hidden" name="role_id[]" value="' + role_id + '">' + rol + '</td><td><input type="text" name="name[]" value="' + name + '"></td><td><input type="text" name="identificacion[]" value="' + identificacion + '"></td><td><input type="hidden" name="email[]" value="' + email + '"></td><input type="hidden" name="password[]" value="' + password + '"><input type="password" name="password_confirmation[]" value="' + cpassword + '"><input type="hidden" name="genero[]" value="' + genero + '">' + cgenero + '<td><input type="number" name="edad[]" value="' + edad + '"></td><input type="hidden" name="telefono[]" value="' + telefono + '"><td><input type="hidden" name="nivel_educativo[]" value="' + nivel_edu + '">' + nivel + '</td><input type="hidden" name="personas_cargo[]" value="' + per_cargo + '"></tr>';
                    cont++;
                    limpiar();
                    evaluar();
                    $("#personal").append(fila);
                } else {
                    alert("Error al realizar el ingreso de personal, por favor revise los datos del personal")
                }
            }

            function limpiar() {
                $("#role_id").val("");
                $("#name").val("");
                $("#identificacion").val("");
                $("#email").val("");
                $("#password").val("");
                $("#password_confirm").val("");
                $("#genero").val("");
                $("#edad").val("");
                $("#telefono").val("");
                $("#nivel_educativo").val("");
                $("#personas_cargo").val("");
            }

            function evaluar() {
                if (cont > 0) {
                    $("#guardar").show();
                } else {
                    $("#guardar").hide();
                }
            }

            function eliminar(index) {
                $("#fila" + index).remove();
                evaluar();
            }
    </script>
@endsection
