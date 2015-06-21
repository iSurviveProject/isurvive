@extends('app')
@section('content')
<div class="page-header">
<h1>CD4 Levels</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">New Entry</div>
    <div class="panel-body">
    	{{ Form::open(array('action' => 'Cd4Controller@store')) }}
		<div class="form-group">
            <label>Solderwide</label>
            <div class="controls">
                <label>
                	{{ Form::text('level') }}
                </label>
            </div>
        </div>
        {{ Form::submit('Save')}}
    	{{ Form::close() }}
    </div>
</div>

