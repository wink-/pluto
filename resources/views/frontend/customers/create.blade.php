@extends('frontend.layouts.master')

@section('after-styles-end')

    <link href="/dist/css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">

@endsection

@section('content')

    <h1>Create New Customer</h1>
    <hr/>

    {!! Form::open(['url' => 'customers', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('CUSTCODE') ? 'has-error' : ''}}">
                {!! Form::label('CUSTCODE', 'Custcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CUSTCODE', null, 
                    ['class' => 'form-control', "pattern" => "[A-Z0-9-]{3,5}", "title" => "3 to 5 Capital Letters, Numbers, or -"])
                    !!}
                    {!! $errors->first('CUSTCODE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CUSTNAME') ? 'has-error' : ''}}">
                {!! Form::label('CUSTNAME', 'Custname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CUSTNAME', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('CUSTNAME', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ADDRESS1') ? 'has-error' : ''}}">
                {!! Form::label('ADDRESS1', 'Address1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ADDRESS1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ADDRESS1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ADDRESS2') ? 'has-error' : ''}}">
                {!! Form::label('ADDRESS2', 'Suite/Apart#: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ADDRESS2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ADDRESS2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CITY') ? 'has-error' : ''}}">
                {!! Form::label('CITY', 'City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CITY', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CITY', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('STATE') ? 'has-error' : ''}}">
                {!! Form::label('STATE', 'State: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::selectState('STATE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('STATE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>            
            <div class="form-group {{ $errors->has('ZIP') ? 'has-error' : ''}}">
                {!! Form::label('ZIP', 'Zip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ZIP', null,
                    ['class' => 'form-control', 'minlength' => 5, "pattern" => "[0-9]", "title" => "5 Digits Only"]) !!}
                    {!! $errors->first('ZIP', '<p class="help-block">:message</p>') !!}
                </div>
            </div>            
            <div class="form-group {{ $errors->has('ADDRESS3') ? 'has-error' : ''}}">
                {!! Form::label('ADDRESS3', 'Billing Address: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ADDRESS3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ADDRESS3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


            <div class="form-group {{ $errors->has('CONTACT1') ? 'has-error' : ''}}">
                {!! Form::label('CONTACT1', 'Contact1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CONTACT1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CONTACT1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PHONE1') ? 'has-error' : ''}}">
                {!! Form::label('PHONE1', 'Phone1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PHONE1', null, ['class' => 'form-control bfh-phone', 'data-format' => "ddd-ddd-dddd", 'placeholder' => "###-###-####"]) !!}
                    {!! $errors->first('PHONE1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('EXTENSION1') ? 'has-error' : ''}}">
                {!! Form::label('EXTENSION1', 'Extension1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('EXTENSION1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('EXTENSION1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CONTACT2') ? 'has-error' : ''}}">
                {!! Form::label('CONTACT2', 'Contact2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CONTACT2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CONTACT2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PHONE2') ? 'has-error' : ''}}">
                {!! Form::label('PHONE2', 'Phone2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PHONE2', null, ['class' => 'form-control bfh-phone', 'data-format' => "ddd-ddd-dddd", 'placeholder' => "###-###-####"]) !!}
                    {!! $errors->first('PHONE2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('EXTENSION2') ? 'has-error' : ''}}">
                {!! Form::label('EXTENSION2', 'Extension2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('EXTENSION2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('EXTENSION2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('FAX') ? 'has-error' : ''}}">
                {!! Form::label('FAX', 'Fax: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('FAX', null, ['class' => 'form-control bfh-phone', 'data-format' => "ddd-ddd-dddd", 'placeholder' => "###-###-####"]) !!}
                    {!! $errors->first('FAX', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('EMAIL') ? 'has-error' : ''}}">
                {!! Form::label('EMAIL', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('EMAIL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('EMAIL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('COD') ? 'has-error' : ''}}">
                {!! Form::label('COD', 'Cod: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('COD', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('COD', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('COD', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TAXIDEN') ? 'has-error' : ''}}">
                {!! Form::label('TAXIDEN', 'Taxiden: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('TAXIDEN', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TAXIDEN', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('REMARKS') ? 'has-error' : ''}}">
                {!! Form::label('REMARKS', 'Remarks: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('REMARKS', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('REMARKS', '<p class="help-block">:message</p>') !!}
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

@section('after-scripts-end')

    <script src="/dist/js/bootstrap-formhelpers.min.js"></script>

@endsection