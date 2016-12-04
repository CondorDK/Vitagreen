@extends('layouts.app')

@section('title', '| Perfil')

@section('content')
<div class="clear"></div>
    <div class="container">
        <div class="container-fluid user">
            <h4 class="subheadline"><i class="fa fa-edit"></i> Actualiza tu informacion de Perfil</h4>
            <div class="clear"></div>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div id="user-badge" style="background:#212A34; padding:20px; height:auto;">
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        <label for="avatar" style="color:#ccc;">Avatar</label>
                            <input type="file" multiple="true" class="form-control" name="avatar">
                                <div style="clear:both"></div>
                            </div>
                            <div class="well">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                            </div>
                            <div class="well">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                            </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            <div class="clear"></div>
        </form>
    </div>
</div>



@endsection
    