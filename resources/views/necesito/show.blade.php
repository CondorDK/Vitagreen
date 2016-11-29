@extends('layouts.app')

@section('title', '| necesito Posts')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $necesito->title }}</h1>

			<p class="lead">{!! $necesito->body !!}</p>
			<hr>
			<p>Posteado en: {{ $necesito->categoria->name }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">

				<dl class="dl-horizontal">
					<label>Categoria:</label>
					<p>{{ $necesito->categoria->name }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Creado hace:</label>
					<p>{{ date('M j, Y h:ia', strtotime($necesito->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Última Modificación:</label>
					<p>{{ date('M j, Y h:ia', strtotime($necesito->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					@if(Auth::user()==$necesito->user)
					<div class="col-sm-6">
						{!! Html::linkRoute('necesito.edit', 'Editar', array($necesito->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['necesito.destroy', $necesito->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
					@endif
				</div>
				<div class="row">
					<div class="col-md-12">
						{!! Html::linkRoute('necesito.index', '<< Volver', array($necesito->id), array('class' => 'btn btn-info btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
