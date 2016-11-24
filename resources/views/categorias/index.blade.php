@extends('layouts.app')

@section('title', '| Todas las Categorias')

@section('content')
	<div class="container">	
		@include('alerts.success')
		<div class="row">
			<div class="col-md-8">
				<h1>Categorias</h1>
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($categorias as $categoria)
							<tr>
								<th>{{ $categoria->id }}</th>
								<td>{{ $categoria->name }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- end of .col-md-8 -->

			<div class="col-md-3">
				<div class="well">
					{!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
						<h2>Nueva Categoria</h2>
						{{ Form::label('name', 'Nombre:') }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}

						{{ Form::submit('Crear Nueva Categoria', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection