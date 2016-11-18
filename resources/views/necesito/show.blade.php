@extends('layouts.main')

@section('title', '| necesito Posts')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $necesito->title }}</h1>
			
			<p class="lead">{!! $necesito->body !!}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Creado Hace:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($necesito->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Última Modificación:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($necesito->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-3">
						{!! Html::linkRoute('necesito.edit', 'Editar', array($necesito->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-3">
						{!! Form::open(['route' => ['necesito.destroy', $necesito->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('necesito.index', '<< Volver', array($necesito->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
				</div>		
			</div>
		</div>
	</div>
</div>

@endsection