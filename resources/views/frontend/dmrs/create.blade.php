@extends('frontend.layouts.master')

@section('content')
    <h2>Create Discrepant Material Report</h2>

    <p><b>WO:</b> {{ $workorder->WORKORDR }} <b>CUSTOMER:</b> {{ $workorder->CUSTCODE }} <b>PN:</b> {{ $workorder->PARTNUM }} <b>PROC:</b> {{ $workorder->PROCNAME }} </p>
    <hr/>
{!! Form::open(['url' => 'discrepantmaterialreports', 'files' => true, 'class' => 'form-horizontal']) !!}    
{!! Form::hidden('workorder', $workorder->WORKORDR) !!}
{!! Form::hidden('customer', $workorder->CUSTCODE) !!}
{!! Form::hidden('process', $workorder->PROCNAME) !!}
{!! Form::hidden('part_number', $workorder->PARTNUM) !!}

<div class="row">
    <div class="form-group-sm">
        <!-- Date Of Discrepancy Field -->
        <div class="col-sm-2">
            {!! Form::label('date_of_discrepancy', 'Date Of Discrepancy:') !!}
            {!! Form::date('date_of_discrepancy', null, ['class' => 'form-control']) !!}
        </div>
        <!-- Rejection Type Field -->
        <div class="col-sm-2">
            {!! Form::label('rejection_type', 'Rejection Type:') !!}
            {!! Form::select('size', array('internal' => 'Internal', 'external' => 'External'), 'internal', ['class' => 'form-control']) !!}
        </div>

    </div>
</div>

<div class="row">
    <div class="form-group-sm">
        <!-- Corrective Action Due Date Field -->
        <div class="col-sm-2">
            {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date:') !!}
            {!! Form::date('corrective_action_due_date', null, ['class' => 'form-control']) !!}
        </div>    

    </div>
</div>

<div class="row">
    <div class="form-group-sm">
        <!-- Description Of Discrepancy Field -->
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('description', 'Description Of Discrepancy:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group-sm">
        <!-- Internal Comments Field -->
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('internal_comments', 'Internal Comments:') !!}
            {!! Form::textarea('internal_comments', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group-sm">
        <!-- Internal Comments Field -->
        <div class="col-sm-6 col-lg-4">
            {!! Form::label('uploaded_file', 'Customer Report') !!}
            {!! Form::file('uploaded_file', ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}






    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection