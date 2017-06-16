@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif

@if(Session::has('success'))
<p id="success" class="alert alert-success">{{ Session::get('success') }}</p>
@endif
@if(Session::has('failed'))
<p id="failed" class="alert alert-danger">{{ Session::get('failed') }}</p>
@endif