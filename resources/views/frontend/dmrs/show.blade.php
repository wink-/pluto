@extends('frontend.layouts.master')

@section('content')

    <h2>Discrepant Material Report - #DMR{{ $dmr->id }} </h2>


    <div class="container-fluid col-sm-5">
        <div class="table">
            <table class="table table-borderless">
                <tr>
                    <td class="col-sm-1">Customer:</td>
                    <td class="col-sm-1">{{ $dmr->customer }}</td>
                    <td class="col-sm-1">Date of Discrepancy:</td>
                    <td class="col-sm-1">{{ $dmr->date_of_discrepancy->toDateString() }}</td>                

                </tr>
                <tr>
                    <td class="col-sm-1">Workorder:</td>
                    <td class="col-sm-1"><a href="{{ url('workorders', $dmr->workorder) }}">{{ $dmr->workorder }}</a></td>
                    <td class="col-sm-1">Type:</td>
                    <td class="col-sm-1">{{ ucfirst($dmr->rejection_type) }}</td>                
                </tr>
                <tr>
                    <td class="col-sm-1">Part Number:</td>
                    <td class="col-sm-1">{{ $dmr->part_number }}</td>
                    <td class="col-sm-1">Process:</td>
                    <td class="col-sm-1">{{ $dmr->process }}</td>                
                </tr>
            </table>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading">Description of Discrepancy
            </div>

            <div class="panel-body">
                {{ $dmr->description }}
            </div>

        </div>
        <div class="panel panel-default ">
            <div class="panel-heading">Picture of Discrepancy
            </div>

            <div class="panel-body">
            {{ Html::image("$dmr->image_path$dmr->image_filename", "Picture of discrepancy",array('height'=>'308','width'=>'460')) }}
            </div>

        </div>        
        <div class="panel panel-default hidden-print">
            <div class="panel-heading">Internal Comments - Will not print
            </div>

            <div class="panel-body">
                {{ $dmr->internal_comments }}
            </div>
            <div class="panel-body">
                {{ link_to("$dmr->report_path$dmr->report_filename", $title = "Customer Report") }}
            </div>            
            
        </div>
    </div>

@endsection