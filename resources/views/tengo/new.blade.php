@extends('layouts.app')

@section('content')
	<div class="container">
		<div class='row'>
			<div class='col-md-8 col-md-offset-2'>
				<center>
					<h1>Tengo</h1>
					<h3>Crear nueva entrada</h3></center>
					@include('alerts.errors')

					{!! Form::open(['route' => 'tengo.store', 'method' => 'POST']) !!}

						@include('partials.form')

						{!! Form::submit('Enviar',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) !!}

					{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
