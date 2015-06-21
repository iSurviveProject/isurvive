@extends('app')
@section('content')
    <div class="page-header">
        <h1>Medication Details</h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            @if ($errors->all())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                </div>
            @endif
            <div class="medication-details">
                    <div class="med-details-field">
                        <label>Name</label>
                        {{ $meds->name }}
                    </div>
                <div class="med-details-field">
                    <label>Dosage</label>
                    {{ $meds->dosage }} {{ $meds->dosage_unit }}
                </div>
                <div class="med-details-field">
                    <label>Frequency</label>
                    {{ $meds->frequency }} {{ $meds->frequency_per }}
                </div>
                <div class="med-details-field">
                    <label>Frequency</label>
                    {{ $meds->frequency }}
                </div>
                <div class="med-details-field">
                    <label>Count</label>
                    {{ $meds->count }}
                </div>

                {{ HTML::link('medication/edit/'.$meds->id,'Edit', array('class' => 'btn btn-xs btn-warning')) }} {{ HTML::link('medication/delete/'.$meds->id, 'Delete', array('class' => 'btn btn-xs btn-danger')) }}

            </div>
        </div>
        <div>
            <div class="pull-right">
                <a href="{{ URL::to('medication/create') }}" class="btn btn-xs btn-success">+ Medication</a>
            </div>
        </div>
    </div>
@endsection