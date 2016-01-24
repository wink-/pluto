@extends('frontend.layouts.master')

@section('content')

    <h1>Customer</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>CUSTCODE</th><th>CUSTNAME</th><th>ADDRESS1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $customer->ID }}</td> <td> {{ $customer->CUSTCODE }} </td><td> {{ $customer->CUSTNAME }} </td><td> {{ $customer->ADDRESS1 }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection