@extends('app')
@section('content')
    <div class="page-header">
        <h1>Medication Management</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-right">
                <a href="{{ URL::to('medication/create') }}" class="btn btn-xs btn-success">+ Medication</a>
            </div>
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
                        <th>Name</th>
                        <th>Dosage</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($user_meds as $meds)
                        <tr>
                            <td>{{ $meds->name }}</td>
                            <td>{{ $meds->dosage }} {{ $meds->dosage_unit }}</td>
                            <td>{{ HTML::link('user/edit/'.$meds->uid,'Edit', array('class' => 'btn btn-xs btn-warning')) }} {{ HTML::link('user/delete/'.$meds->uid, 'Delete', array('class' => 'btn btn-xs btn-danger')) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection