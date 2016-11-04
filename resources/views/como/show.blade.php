@extends('layouts.main')

@section('title', '| Como Reciclar Posts')

@section('content')


	<div class="row">
		<div class="col-md-8">
			<h1>{{ $como->title }}</h1>
			
			<p class="lead">{!! $como->body !!}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Creado Hace:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($como->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Última Modificación:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($como->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('como.edit', 'Editar', array($como->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['como.destroy', $como->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				<div class="col-sm-12">
						{!! Html::linkRoute('como.index', '<< Volver', array($como->id), array('class' => 'btn btn-info btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection

