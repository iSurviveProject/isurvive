@extends('app')
@section('content')
<div class="page-header">
<h1>CD4 Levels</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">New Entry</div>
    <div class="panel-body">
    	{{ Form::open(array('action' => 'Cd4Controller@store', 'class' => 'form-horizontal')) }}
		<div class="form-group">
                {{ Form::label('level', 'New Level', array('for' => 'level', 'class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::input('number', 'level', '', array('class' => 'form-control', 'placeholder' => '10000')) }}
            </div>
        </div>
        <div class="form-group">
                {{ Form::label('date', 'Entry Date', array('for' => 'date', 'class' => 'col-sm-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::input('date', 'date', date('Y-m-d'), array('class' => 'datepicker form-control', 'placeholder' => '10/25/2015', 'max' =>  date('Y-m-d'))) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
            </div>
        </div>
    	{{ Form::close() }}

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Date</th>
                <th>Level</th>
            </tr>
            </thead>
            <tbody>
                @foreach($cd4 as $row)
                    <td>{{ date('m/d/Y', strtotime($row->date)) }}</td>
                    <td>{{ $row->level }}</td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection