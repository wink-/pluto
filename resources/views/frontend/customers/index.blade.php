@extends('frontend.layouts.master')

@section('content')

    <h1>Customers
    @role('Office')
        <a href="{{ url('customers/create') }}" class="btn btn-primary pull-right btn-sm">Add New Customer</a>
    @endauth
    </h1>
    
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>CUSTCODE</th>
                    <th>CUSTNAME</th>
                    <th>ADDRESS1</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($customers as $customer)

                <tr>

                    <td><a href="{{ url('customers', $customer->ID) }}">{{ $customer->CUSTCODE }}</a></td>
                    <td> {{ $customer->CUSTNAME }} </td>
                    <td> {{ $customer->ADDRESS1 }} </td>
                    <td>
                        @roles(['Administrator', 'Office'])
                        <a href="{{ url('customers/' . $customer->ID . '/edit') }}">
                            <button type="submit" class="btn btn-warning btn-xs">Update</button>
                        </a> /
                        @endauth

                        @role('Administrator')
                            {!! Form::open([
                                'method'=>'DELETE',
                                'url' => ['customers', $customer->ID],
                                'style' => 'display:inline'
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        @endauth
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!!  $customers->render()  !!} </div>
    </div>

@endsection
