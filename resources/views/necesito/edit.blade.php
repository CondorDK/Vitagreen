@extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				@include('alerts.errors')

				{!! Form::model($necesito, ['route' => ['necesito.update',$necesito], 'method' => 'PUT']) !!}
					<div class="col-md-8">
						@include('partials.form')
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
								<div class="col-sm-6">
									{!! Html::linkRoute('necesito.show', 'Cancelar', array($necesito->id), array('class' => 'btn btn-danger btn-block')) !!}
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