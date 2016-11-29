@extends('layouts.app')

@section('title', '| Como Posts')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<img src="/images/{{$como->image}}" height="300" width="600"/>
			<h1>{{ $como->title }}</h1>

			<p class="lead">{!! $como->body !!}</p>
			<hr>
			<p>Posteado en: {{ $como->categoria->name }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
					<label>Categoria:</label>
					<p>{{ $como->categoria->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Creado Hace:</label>
					<p>{{ date('M j, Y h:ia', strtotime($como->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Última Modificación:</label>
					<p>{{ date('M j, Y h:ia', strtotime($como->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					@if(Auth::user()==$como->user)
					<div class="col-sm-6">
						{!! Html::linkRoute('como.edit', 'Editar', array($como->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['como.destroy', $como->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
					@endif
				</div>
				<div class="row">
					<div class="col-md-12">
						{!! Html::linkRoute('como.index', '<< Volver', array($como->id), array('class' => 'btn btn-info btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
