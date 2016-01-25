@extends('frontend.layouts.master')

@section('content')

    <h1>Create New Part</h1>
    <hr/>

    {!! Form::open(['url' => 'parts', 'class' => 'form-horizontal']) !!}

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
            <div class="form-group {{ $errors->has('CUSTCODE') ? 'has-error' : ''}}">
                {!! Form::label('CUSTCODE', 'Custcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {{ Form::select('CUSTCODE', $customers, null, ['class' => 'form-control', 'required' => 'required']) }}
                    {!! $errors->first('CUSTCODE', '<p class="help-block">:message</p>') !!}
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
            <div class="form-group {{ $errors->has('PARTNAME') ? 'has-error' : ''}}">
                {!! Form::label('PARTNAME', 'Partname: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PARTNAME', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PARTNAME', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PROCNUM') ? 'has-error' : ''}}">
                {!! Form::label('PROCNUM', 'Procnum: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('PROCNUM', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PROCNUM', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('METHOD') ? 'has-error' : ''}}">
                {!! Form::label('METHOD', 'Method: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('METHOD', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('METHOD', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CERTREQ') ? 'has-error' : ''}}">
                {!! Form::label('CERTREQ', 'Certreq: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('CERTREQ', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('CERTREQ', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('CERTREQ', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('STRESSRLF') ? 'has-error' : ''}}">
                {!! Form::label('STRESSRLF', 'Stressrlf: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('STRESSRLF', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('STRESSRLF', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('STRESSRLF', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SPEC') ? 'has-error' : ''}}">
                {!! Form::label('SPEC', 'Spec: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('SPEC', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SPEC', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('MATERIAL') ? 'has-error' : ''}}">
                {!! Form::label('MATERIAL', 'Material: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('MATERIAL', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('MATERIAL', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PLTHICKMIN') ? 'has-error' : ''}}">
                {!! Form::label('PLTHICKMIN', 'Plthickmin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('PLTHICKMIN', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PLTHICKMIN', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('PLTHICKMAX') ? 'has-error' : ''}}">
                {!! Form::label('PLTHICKMAX', 'Plthickmax: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('PLTHICKMAX', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('PLTHICKMAX', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SPLREQR') ? 'has-error' : ''}}">
                {!! Form::label('SPLREQR', 'Splreqr: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('SPLREQR', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SPLREQR', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('SQRAREAPT') ? 'has-error' : ''}}">
                {!! Form::label('SQRAREAPT', 'Sqrareapt: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('SQRAREAPT', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('SQRAREAPT', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('CUSTWTPC') ? 'has-error' : ''}}">
                {!! Form::label('CUSTWTPC', 'Custwtpc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('CUSTWTPC', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('CUSTWTPC', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('FINISHWTPC') ? 'has-error' : ''}}">
                {!! Form::label('FINISHWTPC', 'Finishwtpc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('FINISHWTPC', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('FINISHWTPC', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('COATINGWT') ? 'has-error' : ''}}">
                {!! Form::label('COATINGWT', 'Coatingwt: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('COATINGWT', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('COATINGWT', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('HTRTCND') ? 'has-error' : ''}}">
                {!! Form::label('HTRTCND', 'Htrtcnd: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('HTRTCND', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('HTRTCND', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NORMLOTSIZ') ? 'has-error' : ''}}">
                {!! Form::label('NORMLOTSIZ', 'Normlotsiz: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('NORMLOTSIZ', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NORMLOTSIZ', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('X') ? 'has-error' : ''}}">
                {!! Form::label('X', 'X: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('X', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('X', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Y') ? 'has-error' : ''}}">
                {!! Form::label('Y', 'Y: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('Y', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Y', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Z') ? 'has-error' : ''}}">
                {!! Form::label('Z', 'Z: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('Z', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Z', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('MATHICKNSS') ? 'has-error' : ''}}">
                {!! Form::label('MATHICKNSS', 'Mathicknss: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('MATHICKNSS', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('MATHICKNSS', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL1') ? 'has-error' : ''}}">
                {!! Form::label('QUAL1', 'Qual1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL2') ? 'has-error' : ''}}">
                {!! Form::label('QUAL2', 'Qual2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL3') ? 'has-error' : ''}}">
                {!! Form::label('QUAL3', 'Qual3: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL3', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL3', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL4') ? 'has-error' : ''}}">
                {!! Form::label('QUAL4', 'Qual4: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL4', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL4', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL5') ? 'has-error' : ''}}">
                {!! Form::label('QUAL5', 'Qual5: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL5', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL5', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('QUAL6') ? 'has-error' : ''}}">
                {!! Form::label('QUAL6', 'Qual6: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('QUAL6', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('QUAL6', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('NOTES') ? 'has-error' : ''}}">
                {!! Form::label('NOTES', 'Notes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('NOTES', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('NOTES', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('OpNotes') ? 'has-error' : ''}}">
                {!! Form::label('OpNotes', 'Opnotes: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('OpNotes', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('OpNotes', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ImageID') ? 'has-error' : ''}}">
                {!! Form::label('ImageID', 'Imageid: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ImageID', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ImageID', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pre_bake_temperature') ? 'has-error' : ''}}">
                {!! Form::label('pre_bake_temperature', 'Pre Bake Temperature: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('pre_bake_temperature', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pre_bake_temperature', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pre_bake_time') ? 'has-error' : ''}}">
                {!! Form::label('pre_bake_time', 'Pre Bake Time: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pre_bake_time', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pre_bake_time', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('embrittlement_bake_temperature') ? 'has-error' : ''}}">
                {!! Form::label('embrittlement_bake_temperature', 'Embrittlement Bake Temperature: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('embrittlement_bake_temperature', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('embrittlement_bake_temperature', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('embrittlement_bake_time') ? 'has-error' : ''}}">
                {!! Form::label('embrittlement_bake_time', 'Embrittlement Bake Time: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('embrittlement_bake_time', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('embrittlement_bake_time', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('adhesion_bake_temperature') ? 'has-error' : ''}}">
                {!! Form::label('adhesion_bake_temperature', 'Adhesion Bake Temperature: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('adhesion_bake_temperature', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('adhesion_bake_temperature', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('adhesion_bake_time') ? 'has-error' : ''}}">
                {!! Form::label('adhesion_bake_time', 'Adhesion Bake Time: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('adhesion_bake_time', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('adhesion_bake_time', '<p class="help-block">:message</p>') !!}
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