@extends('layouts.main')

@section('title', '| Perfil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }} Perfil</h2>
                <a class="btn btn-warning btn-sm" href = "{{URL::route('account',['id'=>$user['id']])}}">
                    Editar
                </a>
                <label>Cargar Foto de Perfil</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
@endsection
