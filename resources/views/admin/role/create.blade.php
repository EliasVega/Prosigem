@extends("layouts.admin");
@section('titulo')
    {{ config('app.name', 'Prosigem') }}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Nueva role</h3>
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
            {!!Form::open(array('url'=>'admin/role', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
            <div class="box-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="rol">rol</label>
                        <input type="text" name="rol" class="form-control" placeholder="Ingrese el Rol">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripcion del Rol">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                        <a href="{{url('admin/role')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection