{{ Form::label('title', 'Titulo:')}}
{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

{{ Form::label('categoria_id', "Categoria:") }}
<select class="form-control" name="categoria_id">
	@foreach($categorias as $categoria)
		<option value='{{ $categoria->id }}'>{{ $categoria->name }}</option>
	@endforeach
</select>

{{ Form::label('body', "Mensaje:") }}
{{ Form::textarea('body', null, array('class' => 'form-control')) }}