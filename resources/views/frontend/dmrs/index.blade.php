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
                    <th>S.No</th><th>Workorder</th><th>Date Of Discrepancy</th><th>Description</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($dmrs as $dmr)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('dmrs', $dmr->id) }}">{{ $dmr->workorder }}</a></td>
                    <td>{{ $dmr->date_of_discrepancy }}</td>
                    <td>{{ $dmr->description }}</td>
                    <td>
                        <a href="{{ url('dmrs/' . $dmr->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
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
