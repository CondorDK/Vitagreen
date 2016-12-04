@extends('layouts.app')

@section('content')
<div class="clear"></div>
    <div id="main_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 style="text-align:center; margin-top:40px;">Ingresar:</h1>
                </div>
            </div>
    <div style="background:#ffffff; border-radius:3px; padding:10px; margin:0px auto; width:400px; text-align:center; padding:25px; margin-bottom:20px; border:1px solid #e5e5e5">
        <img src="/images/login-icon.png" style="width:100px; margin:0px auto; margin-bottom:10px; background:rgba(0, 0, 0, 0.05); border-radius:50px; border:1px solid #e5e5e5" class="animated fadeIn">
            <form method="post" action="{{ url('/login') }}" class="form-signin">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" tabindex="0" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Constraseña" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember">Recordarme
                            </label>
                        </div>
                    </div>
                </div>
                    <button class="btn btn-lg btn-primary btn-block loaderOnClick" type="submit">
                    <i class="fa fa-btn fa-sign-in"></i>Ingresar</button>
                    <br>
                        <input type="hidden" id="redirect" name="redirect" value="">
                        <a href="{{ url('/register') }}">o Registrarse</a><span style="color:#ddd; padding:0px 10px"> / </span>
                        <a href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a>
                    </form>
                </div>
            </div>
        </div>
@endsection
