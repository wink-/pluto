@extends('frontend.layouts.master')

@section('content')

        <div class="row">
            <h1 class="pull-left">Discrepant Material Report Index</h1>
     
            <div class="pull-right" style="margin-top: 25px">
                <fieldset class="form-inline">
                {!! Form::open(['route' => 'dmrs.stage']) !!}        
                    {!! Form::label('WORKORDR', 'Workorder:') !!}
                    {!! Form::text('WORKORDR', null, ['class' => 'form-control', 'required']) !!}
                    {!! Form::submit('Create DMR', ['class' => 'btn btn-primary']) !!} 
                {!! Form::close() !!}
                </fieldset>
            </div>
        </div>    
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>DMR #</th>
                    <th>Workorder</th>
                    <th>Customer</th>
                    <th>Process</th>
                    <th>Date Of Discrepancy</th>
                    <th>Corrective Action Due Date</th>
                    <th>Type</th>
                    <th>Report</th>
                    <th>Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($dmrs as $dmr)

                <tr>

                    <td><a href="{{ url('dmrs', $dmr->id) }}"> {{ $dmr->id }} </a></td>
                    <td><a href="{{ url('workorders', $dmr->workorder) }}"> {{ $dmr->workorder }}</a></td>
                    <td><a href="{{ url('customers', $dmr->customer) }}"> {{ $dmr->customer }}</a></td>
                    <td> {{ $dmr->process }} </td>                    
                    <td> {{ $dmr->date_of_discrepancy->toDateString() }} </td>
                    <td> {{ $dmr->corrective_action_due_date->timestamp <= 0  ? '' : $dmr->corrective_action_due_date->toDateString() }} </td>
                    <td> {{ $dmr->rejection_type }} </td>
                    <td><a href="{{isset($dmr->report_filename) ?  $dmr->report_path . $dmr->report_filename : '' }}">{{ isset($dmr->report_filename) ? 'Report' : ''}}</a></td>
                    <td><a href="{{isset($dmr->image_filename) ?  $dmr->image_path . $dmr->image_filename : '' }}">{{ isset($dmr->image_filename) ? 'Picture' : ''}}</a></td>
                    <td>
                        <a href="{{ url('dmrs/' . $dmr->id . '/edit') }}">
                            <button type="submit" class="btn btn-warning btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['dmrs', $dmr->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $dmrs->render() !!} </div>
    </div>

@endsection