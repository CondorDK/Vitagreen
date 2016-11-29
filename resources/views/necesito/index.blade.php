@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@include('alerts.success')
				<div class="col-md-10">
					<h1>Necesito</h1>
					<h3>Describe el material que necesites en una entrada</h3>
				</div>

				<div class="col-md-4">

						<a href="{{ route('necesito.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing glyphicon glyphicon-plus">    Crear Nueva Entrada</a>
				</div>
				<div class="col-md-12">
					<hr>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Titulo</th>
						<th>Mensaje</th>
						<th>Categoria</th>
						<th>Creado el</th>
					</tr>
				</thead>
				<tbody>
				@foreach($necesit as $necesito)
					{{-- @can('owner', $necesito) --}}
						<tr>
							<td>{{ $necesito->title }}</td>
							<td>{{ substr(strip_tags($necesito->body), 0, 50) }}{{ strlen(strip_tags($necesito->body)) > 50 ? "..." : "" }}</td>
							<td>{{ $necesito->categoria->name }}</td>
							<td>{{ date('M j, Y', strtotime($necesito->created_at)) }}</td>
							<td>
								@if(Auth::user()==$necesito->user)
								<div class="btn-group">
									{{ link_to_route('necesito.edit', $title = 'Editar', $parameter = $necesito, $attributes = ['class' => 'btn btn-primary btn-sm']) }}
									@endif
									{{ link_to_route('necesito.show', $title = 'Ver', $parameter = $necesito, $attributes = ['class' => 'btn btn-info btn-sm']) }}
								</div>
							</td>
						</tr>
					{{-- @endcan --}}
				@endforeach
				</tbody>
			</table>
		</div>

@endsection
