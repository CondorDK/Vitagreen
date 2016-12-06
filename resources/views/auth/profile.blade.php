@extends('layouts.app')

@section('title', '| Perfil')

@section('content')

<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="user-badge-bg"></div>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <h2>{{ $user->name }} Perfil
                    <a href="{{URL::route('account',['id'=>$user['id']])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</a></h2>
                <br>
                <div class="label label-info">Email:{{ $user->email }}</div>
                <br>
                <p class="label label-info">Miembro desde:{{ $user->created_at }}</p>
                    <label>Cargar Foto de Perfil</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Guardar Imagen</button>
            </form>
        </div>
    </div>
</div>


@endsection
