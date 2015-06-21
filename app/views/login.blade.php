@extends('app')
@section('content')

<div class="panel panel-default">
    <div class="panel-heading">New Entry</div>
    <div class="panel-body">
        {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal')) }}
        <div class="form-group">
            {{ Form::label('username', 'Username', array('for' => 'username', 'class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::text('username', Input::old('username'), array('class' =>  'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password', array('for' => 'password', 'class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::password('password', array('class' =>  'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
 </div>
@endsection
