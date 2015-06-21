@extends('app')
@section('content')
<div class="page-header">
<h1>User Management</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    <strong>Edit User:</strong> {{ print_r($user) }}
    </div>
    <div class="panel-body">
        @if ($errors->all())
        	<div class="alert alert-danger">
        	@foreach ($errors->all() as $error)
        		{{ $error }}<br />
        	@endforeach
        	</div>
        @endif
        @if (Session::has('success'))
        	<div class="alert alert-success">
        		{{ Session::get('success') }}
        	</div>
        @endif
        {{ Form::open() }}
        {{ Form::hidden("edit-user", 1) }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}">
                </div>
                <hr>
                <p>If you would like to change this accounts password you may include new passwords below. This is not required to edit an account</p>
                <div class="form-group">
                    <label for="password1">Password</label>
                    <input type="password" class="form-control" name="password1" id="password1">
                </div>
                <div class="form-group">
                    <label for="password2">Password Again</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                </div>
                {{ Form::submit('Save User', array('class' => 'btn btn-success')) }}
                {{ HTML::link('user', 'Go Back', array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection
