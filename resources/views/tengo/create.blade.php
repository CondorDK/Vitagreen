@extends('layouts.main')

@section('title', '| Tengo Material')

@section('stylesheets')

      {!! Html::style('css/parsley.css') !!}


@endsection

@section('content')

      <div class='row'>
      	 <div class='col-md-8 col-md-offset-2'>
      	 	 <center><h1>Crear Nueva Entrada</h1></center>
      	 	 <hr>

      	 	 {!! Form::open(array('route' => 'tengo.store', 'data-parsley-validate' => '')) !!}
      	 	 	  {{ Form::label('title', 'Titulo:')}}
      	 	 	  {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

      	 	 	  {{ Form::label('body', "Mensaje:") }}
      	 	 	  {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				  {{ Form::submit('Enviar', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			 {!! Form::close() !!}

      	 </div>
      </div>

@endsection

@section('scripts')
      
      {!! Html::script('js/parsley.min.js') !!}

@endsection