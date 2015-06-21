@extends('app')
@section('content')
<div class="page-header">
<h1>CD4 Levels</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">New Entry</div>
    <div class="panel-body">
    	{{ Form::open(array('action' => 'Cd4Controller@store', 'class' => 'form-inline')) }}
		<div class="form-group">
            <div class="controls">
                {{ Form::label('level', 'New Level') }}
                {{ Form::text('level', '10000', array('class' => 'form-control')) }}
            </div>
        </div>
        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    	{{ Form::close() }}
    </div>
</div>
@endsection