@extends('frontend.layouts.master')

@section('content')

    <h1>Create New Workorder</h1>
    <hr/>

    {!! Form::open(['url' => 'workorders', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('PartID') ? 'has-error' : ''}}">
                {!! Form::label('PartID', 'Partid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('PartID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PartID', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('WORKORDR') ? 'has-error' : ''}}">
                {!! Form::label('WORKORDR', 'Workordr: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('WORKORDR', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('WORKORDR', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CUSTCODE') ? 'has-error' : ''}}">
                {!! Form::label('CUSTCODE', 'Custcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CUSTCODE', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('CUSTCODE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PARTNUM') ? 'has-error' : ''}}">
                {!! Form::label('PARTNUM', 'Partnum: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PARTNUM', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('PARTNUM', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PROCNAME') ? 'has-error' : ''}}">
                {!! Form::label('PROCNAME', 'Procname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PROCNAME', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('PROCNAME', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PRICE') ? 'has-error' : ''}}">
                {!! Form::label('PRICE', 'Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('PRICE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PRICE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PRICECODE') ? 'has-error' : ''}}">
                {!! Form::label('PRICECODE', 'Pricecode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PRICECODE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PRICECODE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('REWORK') ? 'has-error' : ''}}">
                {!! Form::label('REWORK', 'Rework: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('REWORK', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('REWORK', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('REWORK', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DATERECV') ? 'has-error' : ''}}">
                {!! Form::label('DATERECV', 'Daterecv: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('DATERECV', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('DATERECV', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DATEREQD') ? 'has-error' : ''}}">
                {!! Form::label('DATEREQD', 'Datereqd: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('DATEREQD', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('DATEREQD', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SHIPPED') ? 'has-error' : ''}}">
                {!! Form::label('SHIPPED', 'Shipped: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('SHIPPED', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('SHIPPED', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('SHIPPED', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CUSTPO') ? 'has-error' : ''}}">
                {!! Form::label('CUSTPO', 'Custpo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CUSTPO', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CUSTPO', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CUSTPL') ? 'has-error' : ''}}">
                {!! Form::label('CUSTPL', 'Custpl: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('CUSTPL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CUSTPL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QTY') ? 'has-error' : ''}}">
                {!! Form::label('QTY', 'Qty: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QTY', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QTY', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QTYTYPE') ? 'has-error' : ''}}">
                {!! Form::label('QTYTYPE', 'Qtytype: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('QTYTYPE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QTYTYPE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QTYSHIP') ? 'has-error' : ''}}">
                {!! Form::label('QTYSHIP', 'Qtyship: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QTYSHIP', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QTYSHIP', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QTYNOTSHIP') ? 'has-error' : ''}}">
                {!! Form::label('QTYNOTSHIP', 'Qtynotship: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QTYNOTSHIP', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QTYNOTSHIP', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SFTPL') ? 'has-error' : ''}}">
                {!! Form::label('SFTPL', 'Sftpl: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('SFTPL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SFTPL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SHIPTO') ? 'has-error' : ''}}">
                {!! Form::label('SHIPTO', 'Shipto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('SHIPTO', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SHIPTO', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SHIPVIA') ? 'has-error' : ''}}">
                {!! Form::label('SHIPVIA', 'Shipvia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('SHIPVIA', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SHIPVIA', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('FREIGHT') ? 'has-error' : ''}}">
                {!! Form::label('FREIGHT', 'Freight: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('FREIGHT', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('FREIGHT', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('STARTED') ? 'has-error' : ''}}">
                {!! Form::label('STARTED', 'Started: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('STARTED', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('STARTED', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('STARTED', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('COMPLETE') ? 'has-error' : ''}}">
                {!! Form::label('COMPLETE', 'Complete: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('COMPLETE', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('COMPLETE', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('COMPLETE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DATESHIP') ? 'has-error' : ''}}">
                {!! Form::label('DATESHIP', 'Dateship: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'DATESHIP', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('DATESHIP', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('INVOICED') ? 'has-error' : ''}}">
                {!! Form::label('INVOICED', 'Invoiced: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('INVOICED', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('INVOICED', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('INVOICED', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('INVNUMBER') ? 'has-error' : ''}}">
                {!! Form::label('INVNUMBER', 'Invnumber: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('INVNUMBER', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('INVNUMBER', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('DATEINV') ? 'has-error' : ''}}">
                {!! Form::label('DATEINV', 'Dateinv: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'DATEINV', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('DATEINV', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('COST') ? 'has-error' : ''}}">
                {!! Form::label('COST', 'Cost: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('COST', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('COST', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('WONOTE') ? 'has-error' : ''}}">
                {!! Form::label('WONOTE', 'Wonote: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('WONOTE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('WONOTE', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('STEPNAME1') ? 'has-error' : ''}}">
                {!! Form::label('STEPNAME1', 'Stepname1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('STEPNAME1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('STEPNAME1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TMANHRS1') ? 'has-error' : ''}}">
                {!! Form::label('TMANHRS1', 'Tmanhrs1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TMANHRS1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TMANHRS1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TOTHOURS1') ? 'has-error' : ''}}">
                {!! Form::label('TOTHOURS1', 'Tothours1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TOTHOURS1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TOTHOURS1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('STEPNAME2') ? 'has-error' : ''}}">
                {!! Form::label('STEPNAME2', 'Stepname2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('STEPNAME2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('STEPNAME2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TMANHRS2') ? 'has-error' : ''}}">
                {!! Form::label('TMANHRS2', 'Tmanhrs2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TMANHRS2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TMANHRS2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TOTHOURS2') ? 'has-error' : ''}}">
                {!! Form::label('TOTHOURS2', 'Tothours2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TOTHOURS2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TOTHOURS2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('STEPNAME3') ? 'has-error' : ''}}">
                {!! Form::label('STEPNAME3', 'Stepname3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('STEPNAME3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('STEPNAME3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TMANHRS3') ? 'has-error' : ''}}">
                {!! Form::label('TMANHRS3', 'Tmanhrs3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TMANHRS3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TMANHRS3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TOTHOURS3') ? 'has-error' : ''}}">
                {!! Form::label('TOTHOURS3', 'Tothours3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('TOTHOURS3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TOTHOURS3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('TimeStamp') ? 'has-error' : ''}}">
                {!! Form::label('TimeStamp', 'Timestamp: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'TimeStamp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('TimeStamp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ImageID') ? 'has-error' : ''}}">
                {!! Form::label('ImageID', 'Imageid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ImageID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ImageID', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('LastEdit') ? 'has-error' : ''}}">
                {!! Form::label('LastEdit', 'Lastedit: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('LastEdit', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('LastEdit', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('HOT') ? 'has-error' : ''}}">
                {!! Form::label('HOT', 'Hot: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('HOT', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('HOT', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('HOT', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Priority') ? 'has-error' : ''}}">
                {!! Form::label('Priority', 'Priority: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('Priority', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Priority', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CustID') ? 'has-error' : ''}}">
                {!! Form::label('CustID', 'Custid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('CustID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CustID', '<p class="help-block">:message</p>') !!}
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