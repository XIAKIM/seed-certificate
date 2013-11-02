@extends('index')
@section('content')

<div class="page-header">
  <h1>Request for Export List (PP9)</h1>
</div>
<div class="row">
  <div class="col-md-2 col-md-offset-8 ">Created Date: </div>
  <div class="col-md-1 ">______________</div>
</div>
<br>
<div class="row">
  <div class="col-md-2 col-md-offset-2 ">Company Name: </div>
  <div class="col-md-2 ">______________</div>
  <div class="col-md-2 ">Certificate Number:</div>
  <div class="col-md-2 ">______________</div>
</div>
<div class="row">
  <div class="col-md-2 col-md-offset-2 ">Approved Date: </div>
  <div class="col-md-2 ">______________</div>
  <div class="col-md-2 ">Expired Date: </div>
  <div class="col-md-2 ">______________</div>
</div>
<br>
{{ Form::open(["route" => "/requestPP9", "class" => "form-horizontal"]) }}
<div class="row">
  <div class="col-md-6">
   <!-- Button trigger modal -->
   <button   data-toggle="modal" href="#formModel" class="btn btn-default" type="button">Add!</button>
   <button   class="btn btn-default" type="button">Edit</button>
   <!-- Modal -->
   <div class="modal fade" id="formModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Export Information</h4>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <span class="input-group-addon">Type</span>
            <!-- <input type="text" class="form-control"  placeholder="Type"> -->
            {{ Form::text("type", null, ["class" => "form-control"] ,["placeholder"=>"Type"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Common Name</span>
            <!-- <input type="text" class="form-control" name='commonName' placeholder="Common Name"> -->
            {{ Form::text("commonName", null, ["class" => "form-control"] ,["placeholder"=>"Common Name"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Science Name</span>
            <!-- <input type="text" class="form-control" name='scienceName'placeholder="Science Name"> -->
            {{ Form::text("scienceName", null, ["class" => "form-control"] ,["placeholder"=>"Science Name"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Unit</span>
            <!-- <input type="text" class="form-control" name='unit' placeholder="Unit"> -->
            {{ Form::text("unit", null, ["class" => "form-control"] ,["placeholder"=>"Unit"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Amount</span>
            <!-- <input type="text" class="form-control" name='amount' placeholder="Amount"> -->
            {{ Form::text("amount", null, ["class" => "form-control"] ,["placeholder"=>"Amount"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Value</span>
            <!-- <input type="text" class="form-control" name='value'placeholder="Value"> -->
            {{ Form::text("value", null, ["class" => "form-control"] ,["placeholder"=>"Value"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Arrival Country</span>
            <!-- <input type="text" class="form-control" name='departureCountry' placeholder="Arrival Country"> -->
            {{ Form::text("arrivalCountry", null, ["class" => "form-control"] ,["placeholder"=>"Arrival Country"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Exported Checkpoint</span>
            <!-- <input type="text" class="form-control" name='importedCheckpoint' placeholder="Exported Checkpoint"> -->
          {{ Form::text("exportedCheckpoint", null, ["class" => "form-control"] ,["placeholder"=>"Exported Checkpoint"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Exportted Date</span>
            <!-- <input type="text" class="form-control" name='importedDate' placeholder="Exported Date"> -->
            {{ Form::text("exportedDate", null, ["class" => "form-control"] ,["placeholder"=>"Exported Date"]) }}
          </div>
        </div>
        <div class="modal-footer">
          <button onclick='addRowsOfExport()' type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div>
 {{ Form::close() }}


<div class="col-md-4"></div>

<div class="col-md-2">

</div>
</div>
<br>

<table id='table' class="table">
  <tr id='addRow'>
    <th>No</th>
    <th>Type</th>
    <th>Common Name</th>
    <th>Science Name</th>
    <th>Unit</th>
    <th>Amount</th>
    <th>Quantity</th>
    <th>Arrival<br>Country</th>
    <th>Exported<br>Checkpoint</th>
    <th>Exported<br>Date</th>

  </tr>
</table>

<div class="btn-group">

  <button type="button" class="btn btn-default">Submit</button>
  <button type="reset" class="btn btn-default">Reset</button>

</div>
@stop