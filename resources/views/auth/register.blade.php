@extends('layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>C</b>om<b>W</b>are</a>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>
                Whoops!
            </strong>
            {{ trans('adminlte_lang::message.someproblems') }}
            <br>
                <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </br>
            </br>
        </div>
        @endif
        <div class="register-box-body">
            <p class="login-box-msg">
                {{ trans('adminlte_lang::message.registermember') }}
            </p>
            <form action="{{ url('/register') }}" method="post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input class="form-control" name="name" placeholder="{{ trans('adminlte_lang::message.fullname') }}" type="text" value="{{ old('name') }}"/>
                        <span class="glyphicon glyphicon-user form-control-feedback">
                        </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control" name="email" placeholder="{{ trans('adminlte_lang::message.email') }}" type="email" value="{{ old('email') }}"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback">
                        </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control" name="password" placeholder="{{ trans('adminlte_lang::message.password') }}" type="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback">
                        </span>
                    </div>
                    <div class="form-group has-feedback">
                        <input class="form-control" name="password_confirmation" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" type="password"/>
                        <span class="glyphicon glyphicon-log-in form-control-feedback">
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <label>
                                <div class="checkbox_register icheck">
                                    <label>
                                        <input name="terms" type="checkbox">
                                        </input>
                                    </label>
                                </div>
                            </label>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <button class="btn btn-block btn-flat" data-target="#termsModal" data-toggle="modal" type="button">
                                    {{ trans('adminlte_lang::message.terms') }}
                                </button>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4 col-xs-push-1">
                            <button class="btn btn-primary btn-block btn-flat" type="submit">
                                {{ trans('adminlte_lang::message.register') }}
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </input>
            </form>
            {{-- @include('auth.partials.social_login') --}}
            <a class="text-center" href="{{ url('/login') }}">
                {{ trans('adminlte_lang::message.membreship') }}
            </a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
    @include('layouts.partials.scripts_auth')

    @include('auth.terms')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
@endsection
