@extends('layouts.main')

@section('title', '| Todos Los Posts')



@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>Todos Los Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('tengo.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Crear Nueva Entrada</a>
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
					
					@foreach ($tengo as $tengo)

						<tr>
							<th>{{ $tengo->id }}</th>
							<td>{{ $tengo->title }}</td>
							<td>{{ substr($tengo->body, 0, 50) }}{{ strlen($tengo->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, Y', strtotime($tengo->created_at)) }}</td>
							<td><a href="{{ route('tengo.show', $tengo->id) }}"  class="btn btn-default btn-sm">Ver</a><a href="{{ route('tengo.edit', $tengo->id) }}" class="btn btn-default btn-sm">Editar</a></td>					
						</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@stop

