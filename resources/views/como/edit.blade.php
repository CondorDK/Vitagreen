@extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				@include('alerts.errors')

				{!! Form::model($como, ['route' => ['como.update',$como], 'method' => 'PUT']) !!}
					<div class="col-md-8">
						@include('partials.form')

					{{ Form::label('featured_image', 'Subir Imagen:') }}
		            {{ Form::file('featured_image') }}
		            
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
									{!! Html::linkRoute('como.show', 'Cancelar', array($como->id), array('class' => 'btn btn-danger btn-block')) !!}
								</div>
								<div class="col-sm-6">
								{{ Form::submit('Guardar', ['class' => 'btn btn-success btn-block']) }}
							</div>
						</div>		
					</div>
				</div>
				{!! Form::close() !!}
		</div>
	</div>
	@endsection