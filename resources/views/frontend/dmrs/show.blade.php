@extends('frontend.layouts.master')

@section('content')

    <h1>Discrepantmaterialreport</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Workorder</th><th>Date Of Discrepancy</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $dmr->id }} </td>
                    <td> {{ $dmr->workorder }} </td>
                    <td> {{ $dmr->date_of_discrepancy }} </td>
                    <td> {{ $dmr->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection