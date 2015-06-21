@extends('app')
@section('content')
<div class="page-header">
<h1>User Management</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    Create User
    </div>
    <div class="panel-body">
        @if ($errors->all())
            <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br />
            @endforeach
            </div>
        @endif
        {{ Form::open(array('action' => 'UserController@store')) }}
        {{ Form::hidden("edit-user", 1) }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                {{ Form::submit('Create User', array('class' => 'btn btn-success')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection