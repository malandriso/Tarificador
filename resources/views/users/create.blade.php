@extends('layouts.app')
@section('htmlheader_title')
    ComWare
@endsection
@section('contentheader_title')
    Llamadas
@endsection

@section('main-content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
        <!-- Your Page Content Here -->
        <div class="box box-success">
            <div class="box-header with-border">
                <p class="login-box-msg"> Registrar Usuario <span class="fa fa-user-md"></span></p>
                <form action="{{ url('/registrar') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}"/>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Apellido" name="last_name" value="{{ old('last_name') }}"/>
                    </div>
                    <div class="form-group has-feedback" name="departments">
                        <h5>Privilegios</h5>
                        <select type="set" id="departamento" class="form-control" name="departamento">
                         <option> Total </option>
                        <option> Departamento </option>
                        <option> Sucursal </option>
                      </select>
                    </div>

                    <div class="form-group has-feedback" name="departments">
                        <h5>Departamento</h5>
                        <select type="set" id="departamento" class="form-control" name="departamento">
                         <option> Servicio Tenico </option>
                        <option> Administracion </option>
                        <option> Recursos Humanos </option>
                        <option> Desarrollador </option>
                      </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>          
        </div><!-- /.content-wrapper -->
@endsection