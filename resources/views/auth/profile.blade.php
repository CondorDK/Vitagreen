@extends('layouts.app')

@section('title', '| Perfil')

@section('content')

<div class="clear"></div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="user-badge-bg"></div>
                    <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    <h2>{{ $user->name }} Perfil
                    <a href="{{URL::route('account',['id'=>$user['id']])}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Editar</a></h2>
                <div class="label label-info">{{ $user->email }}</div>
            <p class="member-since">Miembro desde:{{ $user->created_at }}</p>
        </div>
    </div>
</div>


@endsection
