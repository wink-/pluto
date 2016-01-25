@extends('frontend.layouts.master')

@section('content')

    <h1>Contact</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>First Name</th><th>Last Name</th><th>Customer Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $contact->id }}</td> <td> {{ $contact->first_name }} </td><td> {{ $contact->last_name }} </td><td> {{ $contact->customer_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection