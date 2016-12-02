@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@include('alerts.success')
				<div class="col-md-10">
					<h1>¿Como reciclo?</h1>
					<h3>Comparti con la comunidad tus conocimientos a la hora de reciclar</h3>
				</div>

				<div class="col-md-4">
					<a href="{{ route('como.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing glyphicon glyphicon-plus">   Crear Nueva Entrada</a>
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
						<th>Categoria</th>
						<th>Creado El</th>
					</tr>
				</thead>
				<tbody>
				@foreach($como as $com)

						<tr>
							<td>{{ $com->title }}</td>
							<td>{{ substr(strip_tags($com->body), 0, 50) }}{{ strlen(strip_tags($com->body)) > 50 ? "..." : "" }}</td>
							<td>{{ $com->categoria->name }}</td>
							<td>{{ date('M j, Y', strtotime($com->created_at)) }}</td>
							<td>
								@if(Auth::user()==$com->user)
								<div class="btn-group">
									{{ link_to_route('como.edit', $title = 'Editar', $parameter = $com, $attributes = ['class' => 'btn btn-primary btn-sm']) }}
									@endif
									{{ link_to_route('como.show', $title = 'Ver', $parameter = $com, $attributes = ['class' => 'btn btn-info btn-sm']) }}
								</div>
							</td>
						</tr>

				@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!!	$como->links();	!!}
			</div>
		</div>


@endsection
