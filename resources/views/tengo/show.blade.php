@extends('layouts.app')

@section('title', '| Tengo Posts')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tengo->title }}</h1>

			<p class="lead">{!! $tengo->body !!}</p>
			<hr>
			<p>Posteado en: {{ $tengo->categoria->name }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
					<label>Categoria:</label>
					<p>{{ $tengo->categoria->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Creado Hace:</label>
					<p>{{ date('M j, Y h:ia', strtotime($tengo->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Última Modificación:</label>
					<p>{{ date('M j, Y h:ia', strtotime($tengo->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					@if(Auth::user()==$tengo->user)
					<div class="col-sm-6">
						{!! Html::linkRoute('tengo.edit', 'Editar', array($tengo->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['tengo.destroy', $tengo->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
					@endif
				</div>
				<div class="row">
					<div class="col-md-12">
						{!! Html::linkRoute('tengo.index', '<< Volver', array($tengo->id), array('class' => 'btn btn-info btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
