@extends('frontend.layouts.master')



@section('content')

    <h1>Customer</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>CUSTCODE</th><th>CUSTNAME</th><th>ADDRESS1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $customer->CUSTCODE }} </td>
                    <td> {{ $customer->CUSTNAME }} </td>
                    <td> {{ $customer->ADDRESS1 }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

        <h2>Contacts
        {!! Form::open([
            'method'=>'get',
            'url' => ['contacts/create'],
            'style' => 'display:inline'
        ]) !!}
        {!! Form::hidden('customer_code', $customer->CUSTCODE) !!}
        {!! Form::hidden('customer_name', $customer->CUSTNAME) !!}
        {!! Form::submit('Add New Contact', ['class' => 'btn btn-primary pull-right']) !!}
        {!! Form::close() !!}
        </h2>

        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Department</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($customer->contacts as $contact)

                <tr>
    
                    <td><a href="{{ url('contacts', $contact->id) }}">{{ $contact->first_name . ' ' . $contact->last_name }} </a></td>
                    <td> {{ $contact->email }} </td>
                    <td> {{ $contact->phone }} {!!$contact->extension > 0 ? ' ext ' . $contact->extension : ''!!} </td>
                    <td> {{ $contact->department }} </td>
                    <td>
                        <a href="{{ url('contacts/' . $contact->id . '/edit') }}">
                            <button type="submit" class="btn btn-warning btn-xs">Update</button>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['contacts', $contact->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>    
        </table>
    </div>

@endsection