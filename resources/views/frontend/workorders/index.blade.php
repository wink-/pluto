@extends('frontend.layouts.master')

@section('content')

    <h1>Workorders <a href="{{ url('workorders/create') }}" class="btn btn-primary pull-right btn-sm">Add New Workorder</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Workorder</th><th>Customer</th><th>Part Number</th><th>Process</th><th>Quantity</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($workorders as $workorder)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('workorders', $workorder->WORKORDR) }}">{{ $workorder->WORKORDR }}</a></td>
                    <td>{{ $workorder->CUSTCODE }}</td>
                    <td><a href="{{ url('parts', $workorder->PartID) }}">{{ $workorder->PARTNUM }}</a></td>
                    <td>{{ $workorder->PROCNAME }}</td>
                    <td>{{ $workorder->QTY }}</td>
                    <td>
                        <a href="{{ url('workorders/' . $workorder->WORKORDR . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['workorders', $workorder->WORKORDR],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $workorders->render() !!} </div>
    </div>

@endsection
