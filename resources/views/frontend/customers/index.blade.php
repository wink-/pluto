@extends('frontend.layouts.master')

@section('content')

    <h1>Customers <a href="{{ url('customers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Customer</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>CUSTCODE</th><th>CUSTNAME</th><th>ADDRESS1</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($customers as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('customers', $item->ID) }}">{{ $item->CUSTCODE }}</a></td><td>{{ $item->CUSTNAME }}</td><td>{{ $item->ADDRESS1 }}</td>
                    <td>
                        <a href="{{ url('customers/' . $item->ID . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['customers', $item->ID],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $customers->render() !!} </div>
    </div>

@endsection
