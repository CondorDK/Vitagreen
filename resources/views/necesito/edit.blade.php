@extends('layouts.main')

@section('title', '| Editar Post')

@section('stylesheets')

	  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

      <script>
            tinymce.init({
                  selector: 'textarea',
                  plugins: 'link',
                  menubar: false

            });
      </script>

@section('content')


@section('content')
	
	<div class="row">
		{!! Form::model($necesito, ['route' => ['necesito.update', $necesito->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Titulo:') }}			
			{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

			{{ Form::label('body', 'Mensaje:', ['class' => 'form-spacing-top']) }}	
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Creado Hace:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($necesito->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Última Modificación:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($necesito->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('necesito.show', 'Cancelar', array($necesito->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Guardar', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>		
			</div>
		</div>
		{!! Form::close() !!}
	</div> <!-- fin del .row (form)-->

<br>
<br>
<br>
<br>

@stop