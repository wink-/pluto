@extends('frontend.layouts.master')

@section('content')

    <h1>Edit Contact</h1>
    <hr/>

    {!! Form::model($contact, [
        'method' => 'PATCH',
        'url' => ['contacts', $contact->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                {!! Form::label('first_name', 'First Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                {!! Form::label('last_name', 'Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('customer_id') ? 'has-error' : ''}}">
                {!! Form::label('customer_id', 'Customer Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!!Form::select('customer_id', $customers, null, ['class' => 'form-control'])!!}
                    {!! $errors->first('customer_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                {!! Form::label('phone', 'Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('extension') ? 'has-error' : ''}}">
                {!! Form::label('extension', 'Extension: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('extension', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('extension', '<p class="help-block">:message</p>') !!}
                </div>
            </div>             
            <div class="form-group {{ $errors->has('cell') ? 'has-error' : ''}}">
                {!! Form::label('cell', 'Cell: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cell', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cell', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('department') ? 'has-error' : ''}}">
                {!! Form::label('department', 'Department: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('department', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
                {!! Form::label('active', 'Active: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('active', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('active', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
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