@if (Session::has('success'))
	<center>
	<div class="alert alert-success" role="alert">
		<strong>{{ Session::get('success') }}</strong>
	</div>

@endif

@if (count($errors) > 0)
	
	<div class="alert alert-danger" role="alert">
		<strong>Error:</strong>
		<ul>
		@foreach ($errors->All() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>

	</div>
	</center>
	
@endif

