@extends('layouts.app')

@section('content')
<div class="clear"></div>
    <div id="main_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1 style="text-align:center; margin-top:40px;">Registrarme:</h1>
                </div>
            </div>
            <div style="text-align:center; display:block;">
                <div style="max-width:500px; width:100%; margin:0px auto">
                </div>
            </div>
            <div style="background:#ffffff; border-radius:3px; padding:10px; margin:0px auto; width:400px; text-align:center; padding:25px; margin-bottom:20px; border:1px solid #e5e5e5">
            <img src="/images/signup-icon.png" style="width:100px; margin:0px auto; margin-bottom:10px; background:rgba(0, 0, 0, 0.05); border-radius:50px; border:1px solid #e5e5e5" class="animated fadeIn">
            <form method="post" action="{{ url('/register') }}" class="form-signin">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" placeholder="Nombre" tabindex="0" id="name" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" placeholder="Email" tabindex="0" id="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" placeholder="Confirmar contraseña" id="password-confirm" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                </div>
            <input type="hidden" name="redirect" value="/signup">
            <button class="btn btn-lg btn-primary btn-block loaderOnClick" type="submit"><i class="fa fa-btn fa-user"></i>Registrarme</button>
            <br>
            <a href="{{ url('/login') }}">o Ingresar</a>
            </form>
        </div>
    </div>  
</div>
 
@endsection
