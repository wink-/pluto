@extends('frontend.layouts.master')

@section('content')

    <h1>Edit Discrepantmaterialreport</h1>
    <hr/>

    {!! Form::model($dmr, [
        'method' => 'PATCH',
        'url' => ['discrepantmaterialreports', $dmr->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('workorder') ? 'has-error' : ''}}">
                {!! Form::label('workorder', 'Workorder: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('workorder', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('workorder', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_of_discrepancy') ? 'has-error' : ''}}">
                {!! Form::label('date_of_discrepancy', 'Date Of Discrepancy: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_of_discrepancy', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_of_discrepancy', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('corrective_action_due_date') ? 'has-error' : ''}}">
                {!! Form::label('corrective_action_due_date', 'Corrective Action Due Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('corrective_action_due_date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('corrective_action_due_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rejection_type') ? 'has-error' : ''}}">
                {!! Form::label('rejection_type', 'Rejection Type: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rejection_type', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rejection_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('internal_comments') ? 'has-error' : ''}}">
                {!! Form::label('internal_comments', 'Internal Comments: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('internal_comments', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('internal_comments', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
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