@extends('layouts.app')

@section('content')
	<div class="container">
		<div class='row'>
			<div class='col-md-8 col-md-offset-2'>
				<center><h1>Crear Nueva Entrada</h1></center>
					@include('alerts.errors')

					{!! Form::open(['route' => 'necesito.store', 'method' => 'POST']) !!}

						@include('partials.form')

						{!! Form::submit('Enviar',['class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;']) !!}

					{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
