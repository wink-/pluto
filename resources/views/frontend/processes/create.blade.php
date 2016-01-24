@extends('frontend.layouts.master')

@section('content')

    <h1>Create New Process</h1>
    <hr/>

    {!! Form::open(['url' => 'processes', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('PROCNAME') ? 'has-error' : ''}}">
                {!! Form::label('PROCNAME', 'Process Code: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PROCNAME', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('PROCNAME', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DESCRIPT') ? 'has-error' : ''}}">
                {!! Form::label('DESCRIPT', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('DESCRIPT', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('DESCRIPT', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('MINCOST') ? 'has-error' : ''}}">
                {!! Form::label('MINCOST', 'Mininum Lot: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('MINCOST', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('MINCOST', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('RoHS') ? 'has-error' : ''}}">
                {!! Form::label('RoHS', 'RoHS Compliant?: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('RoHS', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('RoHS', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('RoHS', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('REACH') ? 'has-error' : ''}}">
                {!! Form::label('REACH', 'REACH Compliant?: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('REACH', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('REACH', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('REACH', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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