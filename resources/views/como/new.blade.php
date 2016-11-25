@extends('layouts.app')

@section('content')
	<div class="container">
		<div class='row'>
			<div class='col-md-8 col-md-offset-2'>
				<center>
					<h1>Como</h1>
					<h3>Crear nueva entrada</h3></center>
					@include('alerts.errors')

					{!! Form::open(array('route' => 'como.store', 'data-parsley-validate' => '', 'files' => true)) !!}

						@include('partials.form')

                          {{ Form::label('featured_image', 'Subir Imagen:') }}
                          {{ Form::file('featured_image') }}

						{!! Form::submit('Enviar',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) !!}

					{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
