@extends('layouts.app')

@section('content')
<div class="container login">
    <div class="row">
        <div class="col m3"></div>
        <div class="col m6">
            <div class="panel panel-default">
                <div class="panel-heading"><h5>Login</h5></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col s12">
                                <p>
                                    <input type="checkbox" class="filled-in checkbox-orange" id="remember">
                                    <label for="remember">Remember me</label>
                                </p>
                            </div>

                        <div class="form-group botao-login">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary deep-orange darken-3">
                                    Login
                                </button>

                                <a class="btn btn-link deep-orange darken-3" href="{{ url('/password/reset') }}">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
