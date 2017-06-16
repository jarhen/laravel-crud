@extends('master')

@section('content')
	<div class="col-lg-12 top-buffer ">
		<a class="btn btn-success btn-lg" href="/create" role="button">Add User</a>
	</div>

	<div class="col-lg-12 top-buffer ">
		<div class="panel panel-primary">
		  <div class="panel-heading">User Info </div>
		  <div class="panel-body table-responsive">
		     <table id="mytable" class="table table-bordered">
		     	<thead>
		     		<tr>
		     			<th>Email</th>
		     			<th>Username</th>
		     			<th>Password</th>
		     			<th>Action</th>
		     			
		     		</tr>
		     	</thead>
		     	<tbody>
		     	@foreach($data as $info)
		     		<tr>
		     			<td>{{ $info->email }}</td>
		     			<td>{{ $info->username }}</td>
		     			<td>{{ $info->password }}</td>
		     			<td>
		     				<a class="btn btn-primary btn-sm btn-block" href="/index/{{ $info->id }}" role="button">Edit</a>
		     				<a class="btn btn-danger delete-modal btn-sm btn-block" href="#" role="button" data-id="{{ $info->id }}" >Delete Using Bootstrap Modal</a>
		     				<a class="btn btn-warning del btn-sm btn-block" href="#" role="button" data-id="{{ $info->id }}" >Delete using jquery-confirm</a>
		     			</td>
		     		</tr>
		  		@endforeach
		     		
		     	</tbody>
		     </table>
		  </div>
		</div>
	</div>

@endsection

<!-- Modal Dialog -->
<div class="modal fade" id="deleteModal" data-easein="bounce" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Parmanently</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure about this ?</p>

        <input type="hidden" class="form-control" id="id" name="id" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button  type="button" class="btn btn-danger delete" id="confirm" data-id="">Delete</button>
      </div>
    </div>
  </div>
</div>
