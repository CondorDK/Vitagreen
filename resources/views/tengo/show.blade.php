@extends('layouts.main')

@section('title', '| Tengo Posts')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tengo->title }}</h1>
			
			<p class="lead">{!! $tengo->body !!}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Creado Hace:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($tengo->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Última Modificación:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($tengo->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-3">
						{!! Html::linkRoute('tengo.edit', 'Editar', array($tengo->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-3">
						{!! Form::open(['route' => ['tengo.destroy', $tengo->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Borrar', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				<div class="col-sm-6">
						{!! Html::linkRoute('tengo.index', '<< Volver', array($tengo->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

