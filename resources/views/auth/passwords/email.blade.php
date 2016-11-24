@extends('layouts.main')

<!-- Main Content -->
@section('content')
<div class="container">

        <div class="col-md-8 col-xs-offset-2">
          <div class="row">
            <div class="account-wall">
                <h2>Restaurar Contraseña</h2>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-singin" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                          </div>

                              <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-envelope"></i> Enviar link de restauración
                              </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
