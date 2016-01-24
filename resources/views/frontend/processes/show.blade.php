@extends('frontend.layouts.master')

@section('content')

    <h1>{{link_to_route('processes.index', 'Process')}}</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Process Code</th><th>Description</th><th>Minimum Lot</th><th>RoHS</th><th>REACH</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $process->ID }} </td>
                    <td> {{ $process->PROCNAME }} </td>
                    <td> {{ $process->DESCRIPT }} </td>
                    <td> {{ $process->MINCOST }} </td>
                    <td> {{ $process->RoHS }} </td>
                    <td> {{ $process->REACH }} </td>

                </tr>
            </tbody>    
        </table>
    </div>

@endsection