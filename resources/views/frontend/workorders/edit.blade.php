@extends('frontend.layouts.master')

@section('content')

    <h1>Edit Workorder</h1>
    <hr/>

    {!! Form::model($workorder, [
        'method' => 'PATCH',
        'url' => ['workorders', $workorder->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('PartID') ? 'has-error' : ''}}">
                {!! Form::label('PartID', 'Partid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('PartID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PartID', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('WONOTE') ? 'has-error' : ''}}">
                {!! Form::label('WONOTE', 'Wonote: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('WONOTE', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('WONOTE', '<p class="help-block">:message</p>') !!}
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