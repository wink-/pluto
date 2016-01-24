@extends('frontend.layouts.master')

@section('content')

    <h1>Process <a href="{{ url('processes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Process</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Code</th><th>Description</th><th>Minimum Lot</th><th>Compliant</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($process as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('processes', $item->ID) }}">{{$item->PROCNAME}}</a></td>
                    <td>{{$item->DESCRIPT}}</td>
                    <td>${{$item->MINCOST}}.00</td>
                    <td>{!!$item->RoHS < 1 ? ' Not RoHS &' : ' RoHS &'!!} {!!$item->REACH < 1 ? ' Not REACH' : ' REACH'!!}</td>
                    <td>
                        <a href="{{ url('processes/' . $item->ID . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['process', $item->ID],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $process->render() !!} </div>
    </div>

@endsection
