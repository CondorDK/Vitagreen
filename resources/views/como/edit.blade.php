@extends('layouts.main')

@section('title', '| Editar Post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

	  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

      <script>
            tinymce.init({
                  selector: 'textarea',
                  plugins: 'link',
                  menubar: false

            });
      </script>

@endsection


@section('content')
	<div class="container">
	<div class="row">
		{!! Form::model($como, ['route' => ['como.update', $como->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Titulo:') }}			
			{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}


			{{ Form::label('featured_image', 'Subir Imagen:') }}
            {{ Form::file('featured_image') }}

			{{ Form::label('body', 'Mensaje:', ['class' => 'form-spacing-top']) }}	
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Creado Hace:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($como->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Última Modificación:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($como->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('como.show', 'Cancelar', array($como->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Guardar', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>		
			</div>
		</div>
		{!! Form::close() !!}
	</div> <!-- fin del .row (form)-->
</div>
<br>
<br>
<br>
<br>

@endsection

@section('scripts')
      
      {!! Html::script('js/parsley.min.js') !!}

@endsection