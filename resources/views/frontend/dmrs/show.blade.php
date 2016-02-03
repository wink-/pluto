@extends('frontend.layouts.master')

@section('content')
<div class="row hidden-print">
    <div class="pull-left">
        <h2>Discrepant Material Report</h2>
    </div>
    <div class="pull-right">
        <h2>DMR #00{{ $dmr->id }}</h2>
    </div>
</div>
<div class="row visible-print-block">
<div class="pull-left">
    <address>
      <h4>Surface Finish Technologies, Inc.</h4>
      215 Judson Street<br>
      Elmira, NY 14901<br>
      P: (607) 732-2909 F: (607) 733-6119
    </address>
</div>
<div class=" text-right pull-right">
  <h4>Discrepant Material Report</h4>
  <h4><small>DMR #00{{ $dmr->id }}</small></h4>
</div>
</div>
<hr>
<div class="table">
    <table class="table table-borderless">
        <tr>
            <td><strong>Customer:</strong> {{ $dmr->customer }}</td>
            <td><strong>Date of Discrepancy:</strong> {{ $dmr->date_of_discrepancy->toDateString() }}</td>
        </tr>
        <tr>
            <td><strong>Workorder:</strong> <a href="{{ url('workorders', $dmr->workorder) }}">{{ $dmr->workorder }}</a></td>
            <td><strong>Type:</strong> {{ ucfirst($dmr->rejection_type) }}</td>             
        </tr>
        <tr>
            <td><strong>Part Number:</strong> {{ $dmr->part_number }}</td>
            <td><strong>Process:</strong> {{ $dmr->process }}</td>         
        </tr>
    </table>
</div>
<div class="panel panel-default ">
    <div class="panel-heading"><strong>Description of Discrepancy</strong>
    </div>

    <div class="panel-body">
        <p>{{ $dmr->description }}</p>
    </div>

</div>
<div class="panel panel-default ">
    <div class="panel-heading"><strong>Picture of Discrepancy</strong>
    </div>

    <div class="panel-body">
    {{ Html::image("$dmr->image_path$dmr->image_filename", "Picture of discrepancy",array('height'=>'308','width'=>'460')) }}
    </div>

</div>
<div class="panel panel-default hidden-print">
    <div class="panel-heading"><strong>Internal Comments</strong> - <em><small>Will not show when printed</small></em>
    </div>

    <div class="panel-body">
        <p>{{ $dmr->internal_comments }}</p>
    </div>
    <div class="panel-body">
        {{ link_to("$dmr->report_path$dmr->report_filename", $title = "Customer Report") }}
    </div>
    <div class="panel-body">
        {!! $dmr->corrective_action_due_date->timestamp <= 0  ? '' : '<strong>Corrective Action Due Date: </strong>' . $dmr->corrective_action_due_date->toDateString() !!}
    </div>
    
</div>

@endsection