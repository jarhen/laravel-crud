@extends('master')

@section('content')
	<div class="col-lg-8 col-lg-offset-2 top-buffer">
		<div class="panel panel-primary">
		  <div class="panel-heading">Edit User</div>
		  <div class="panel-body">
		     <form method="POSt" action="/update/{{ $data->id }}">
		     	{{ csrf_field() }}
		     	<fieldset class="form-group">
		     		<label for="email">Email</label>
		     		<input type="email" class="form-control" id="email" name="email" placeholder="Email Address"  value="{{ $data->email }}" required>
		     	</fieldset>
		     	<fieldset class="form-group">
		     		<label for="username">Username</label>
		     		<input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{{ $data->username }}" required>
		     	</fieldset>

		     	<fieldset class="form-group">
		     		<label for="password">Enter Old Password</label>
		     		<input type="password" class="form-control" id="password" name="oldpassword" placeholder="Password" value="" required>
		     	</fieldset>

		     	<fieldset class="form-group">
		     		<label for="newpassword">Enter New Password</label>
		     		<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="Password" value="" required>
		     	</fieldset>

		     	<fieldset class="form-group">
		     		<a class="btn btn-danger" href="/index">Cancel</a>
		     		<button class="btn btn-primary" type="submit">Save</button>
		     	</fieldset>
		     </form>
		  </div>
		</div>
	</div>
@endsection
