@extends('index')
@section('content')

<div class="page-header">
  <h1>Seed Analysis</h1>
</div>

<br>
{{ Form::open(["route" => "/checkrequest", "class" => "form-horizontal"]) }}
<div class="row">
  <div class="col-md-6">
   <!-- Button trigger modal -->
  <button   data-toggle="modal" href="#formModel" class="btn btn-default" type="button">Add!</button>
   <button   class="btn btn-default" type="button">Delete</button>
   <!-- Modal -->
   <div class="modal fade" id="formModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Seed Information</h4>
        </div>
        <div class="modal-body">
          <div class="input-group">
            <span class="input-group-addon">Seed Type</span>
            <!-- <input type="text" class="form-control" name='type' placeholder="Type"> -->
             {{ Form::text("type", null, ["class" => "form-control"] ,["placeholder"=>"Type"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Name</span>
            <!-- <input type="text" class="form-control" name='commonName' placeholder="Common Name"> -->
            {{ Form::text("name", null, ["class" => "form-control"] ,["placeholder"=>"Common Name"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Location</span>
            <!-- <input type="text" class="form-control" name='scienceName'placeholder="Science Name"> -->
            {{ Form::text("location", null, ["class" => "form-control"] ,["placeholder"=>"Science Name"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Yield Date</span>
            <!-- <input type="text" class="form-control" name='unit' placeholder="Unit"> -->
            {{ Form::text("yieldDate", null, ["class" => "form-control"] ,["placeholder"=>"Unit"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Chemical</span>
            <!-- <input type="text" class="form-control" name='amount' placeholder="Amount"> -->
            {{ Form::text("chemical", null, ["class" => "form-control"] ,["placeholder"=>"Amount"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Quantity</span>
            <!-- <input type="text" class="form-control" name='value'placeholder="Value"> -->
            {{ Form::text("quantity", null, ["class" => "form-control"] ,["placeholder"=>"Value"]) }}
          </div>
          <div class="input-group">
            <span class="input-group-addon">Weight</span>
            <!-- <input type="text" class="form-control" name='departureCountry' placeholder="Departure Country"> -->
            {{ Form::text("weight", null, ["class" => "form-control"] ,["placeholder"=>"Departure Country"]) }}
          </div>
          
        </div>
        <div class="modal-footer">
          <button onclick='addRowsOfSeedAnalysis()' type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
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
    <th>Seed Type</th>
    <th>Name</th>
    <th>Location</th>
    <th>Yield Date</th>
    <th>Chemical</th>
    <th>Quanlity</th>
    <th>Weight</th>
    

  </tr>
</table>

<div class="btn-group">
   {{ Form::button("Submit", ["class"=>"btn btn-default"  ]) }}
   {{ Form::button("Reset", ["class"=>"btn btn-default"  ]) }}

</div>
@stop