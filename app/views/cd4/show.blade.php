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
                {{ Form::text('level', '', array('class' => 'form-control', 'placeholder' => '10000')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="controls">
                {{ Form::label('date', 'Entry Date') }}
                {{ Form::text('date', '', array('class' => 'datepicker form-control', 'placeholder' => '10/25/2015')) }}
            </div>
        </div>
        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
    	{{ Form::close() }}
    </div>
</div>
@endsection