@extends('frontend.layouts.master')

@section('content')

    <h1>Parts <a href="{{ url('parts/create') }}" class="btn btn-primary pull-right btn-sm">Add New Part</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>PARTNUM</th><th>PROCNAME</th><th>CUSTCODE</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($parts as $part)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('parts', $part->ID) }}">{{ $part->PARTNUM }}</a></td>
                    <td>{{ $part->PROCNAME }}</td>
                    <td>{{ $part->CUSTCODE }}</td>
                    <td>
                        <a href="{{ url('parts/' . $part->ID . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['parts', $part->ID],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $parts->render() !!} </div>
    </div>

@endsection
