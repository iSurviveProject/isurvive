@extends('app')
@section('content')
<div class="page-header">
<h1>User Management</h1>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
	<div class="pull-right">
		    <a href="{{ URL::to('user/create') }}" class="btn btn-xs btn-success">Create User</a>
		</div>
	User List
	</div>
	<div class="panel-body">
		@if ($errors->all())
			<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }}<br />
			@endforeach
			</div>
		@endif
		<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover" id="dataTables">
			<thead>
				<tr>
					<th>ID #</th>
					<th>Username</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->uid }}</td>
					<td>{{ $user->username }}</td>
					<td>
						{{ HTML::link('user/edit/'.$user->id,'Edit', array('class' => 'btn btn-xs btn-warning')) }}
						{{ Form::open(array('route' => array('UserController@destroy', $user->id), 'method' => 'delete')) }}
							<button type="submit" class="btn btn-xs btn-danger">Delete</button>
						{{ Form::close() }}
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>
@endsection