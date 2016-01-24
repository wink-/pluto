@extends('frontend.layouts.master')

@section('content')

    <h1>Part</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>PARTNUM</th><th>PROCNAME</th><th>CUSTCODE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $part->ID }} </td>
                    <td> {{ $part->PARTNUM }} </td>
                    <td> {{ $part->PROCNAME }} </td>
                    <td> {{ $part->CUSTCODE }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection