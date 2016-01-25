@extends('frontend.layouts.master')

@section('content')

    <h1>Workorder</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Workorder</th><th>Customer</th><th>Part Number</th><th>Process</th><th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $workorder->WORKORDR }} </td>
                    <td> {{ $workorder->CUSTCODE }} </td>
                    <td> {{ $workorder->PARTNUM }} </td>
                    <td> {{ $workorder->PROCNAME }} </td>
                    <td> {{ $workorder->QTY }} </td>

                </tr>
            </tbody>    
        </table>
    </div>

@endsection