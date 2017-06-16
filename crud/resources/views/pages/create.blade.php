@extends('master')

@section('content')
	<div class="col-lg-8 col-lg-offset-2 top-buffer">
		<div class="panel panel-primary">
		  <div class="panel-heading">Add User</div>
		  <div class="panel-body">

		  {!! Form::open(['url' => 'create']) !!}

		  			{{ Form::token() }}

		  		<div class="form-group">

				    {!! Form::label('email','Email Address') !!}
					{!! Form::text('email', null,['class' =>'form-control','required','placeholder' => 'Example@gmail.com']) !!}

				</div>

				<div class="form-group">

				    {!! Form::label('username','Username') !!}
					{!! Form::text('username', null,['class' =>'form-control','required','placeholder' => 'ex: juan']) !!}
					
				</div>

				<div class="form-group">

				    {!! Form::label('password','Password') !!}
					{!! Form::password('password',['class' => 'form-control','required']) !!}
					<small>Minimum of 5 characters or numbers </small>

				</div>

				<div class="form-group">

					 {!! Form::submit( 'Save' , ['class' =>'btn btn-primary']) !!}
					  <a class="btn btn-danger" href="/index">Cancel</a>
					 {!! Form::close() !!}

				</div>
		 
		    <!--  <form method="POSt" action="/create">
		     	{{ csrf_field() }}
		     	<fieldset class="form-group">
		     		<label for="email">Email</label>
		     		<input type="email" class="form-control" id="email" name="email" placeholder="Email Address"  >
		     	</fieldset>
		     	<fieldset class="form-group">
		     		<label for="username">Username</label>
		     		<input type="text" class="form-control" id="username" name="username" placeholder="Username" >
		     	</fieldset>
		     	<fieldset class="form-group">
		     		<label for="password">Password</label>
		     		<input type="password" class="form-control" id="password" name="password" placeholder="Password" >
		     	</fieldset>
		     	<fieldset class="form-group">
		     		<a class="btn btn-danger" href="/index">Cancel</a>
		     		<button class="btn btn-primary" type="submit">Save</button>
		     	</fieldset>
		     </form> -->
		  </div>
		</div>
	</div>
@endsection
