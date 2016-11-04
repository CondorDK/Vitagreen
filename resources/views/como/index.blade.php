@extends('layouts.main')

@section('title', '| Como Reciclar')



@section('content')

	<div class="row">
	<br>
		<div class="col-md-10">
			<h2>"Como Reciclo" Posts</h2>
		</div>

		<div class="col-md-2">
			<a href="{{ route('como.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Crear Nueva Entrada</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div> <!-- end of .row-->

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Titulo</th>
					<th>Mensaje</th>
					<th>Creado Hace</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($como as $com)

						<tr>
							<th>{{ $com->id }}</th>
							<td>{{ $com->title }}</td>
							<td>{{ substr(strip_tags($com->body), 0, 50) }}{{ strlen(strip_tags($com->body)) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($com->created_at)) }}</td>
							<td><a href="{{ route('como.show', $com->id) }}"  class="btn btn-default btn-sm">Ver</a>
								<a href="{{ route('como.edit', $com->id) }}" class="btn btn-default btn-sm">Editar</a></td>			
						</tr>

					@endforeach

				</tbody>
			</table>

		</div>
	</div>

@stop

