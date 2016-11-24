@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@include('alerts.success')
				<div class="col-md-10">
					<h1>Todos Los Posts</h1>
				</div>

				<div class="col-md-4">
					<a href="{{ route('como.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Crear Nueva Entrada</a>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Mensaje</th>
						<th>Creado El</th>
					</tr>
				</thead>
				<tbody>
				@foreach($com as $como)
					@can('owner', $como)
						<tr>
							<td>{{ $como->title }}</td>
							<td>{{ substr(strip_tags($como->body), 0, 50) }}{{ strlen(strip_tags($como->body)) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($como->created_at)) }}</td>
							<td>
								<div class="btn-group">
									{{ link_to_route('como.edit', $title = 'Editar', $parameter = $como, $attributes = ['class' => 'btn btn-primary btn-sm']) }}
									{{ link_to_route('como.show', $title = 'Ver', $parameter = $como, $attributes = ['class' => 'btn btn-info btn-sm']) }}
								</div>
							</td>
						</tr>
					@endcan
				@endforeach
				</tbody>
			</table>
		</div>

@endsection