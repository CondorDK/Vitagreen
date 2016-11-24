@extends('layouts.main')

@section('content')
<div class="container">
    <div class="col-md-offset-2 col-xs-offset-1 col-xs-10 col-md-8">
      <div class="row">
      <div class="account-wall">
                <h2>Ingresar</h2>
                    <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                          </div>

                        <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              </div>
                                <label class="checkbox">
                                  <input type="checkbox" name="remember"> Recordarme
                                </label>
                              <button type="submit" class="btn btn-primary">
                                Ingresar
                              </button>
                            </br>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu Contraseña?</a>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endsection
