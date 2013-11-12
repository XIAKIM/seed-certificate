@extends('index')
@section('content')
<h1>
  Passing Seed Table
</h1>
<p class="text-left">
  <form role="form">

    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#requestpp2table">Add</button>


    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#requestpp2table">Delete</button>

  </form>
</p> 
<table id ='table' class="table table-bordered">
  <tr>
    <th>No.</th>
    <th>Type</th>
    <th>Common Name</th>
    <th>Science Name</th>
    <th>Unit</th>
    <th>Quantity</th>
  </tr>

</table>
<p class="text-right">
 <a href="" class="btn btn-default">Back</a>
  <a href="passing_table.html" class="btn btn-default">Next</a>
 
</p>
</div>


<footer>
  <hr>
  <p>XIKIM 2013</p>
</footer>
<!-- end footer -->

</div>
<!-- end containner -->


<!-- Modal -->
<div class="modal fade" id="requestpp2table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
        <div class="input-group">
          <span class="input-group-addon">Type</span>
          <!-- <input type="text" class="form-control" name='commonName' placeholder="Common Name"> -->
          {{ Form::text("type", null, ["class" => "form-control"] ,["placeholder"=>"Common Name"]) }}
        </div>
        <div class="input-group">
          <span class="input-group-addon">Common Name</span>
          <!-- <input type="text" class="form-control" name='scienceName'placeholder="Science Name"> -->
          {{ Form::text("commonName", null, ["class" => "form-control"] ,["placeholder"=>"Science Name"]) }}
        </div>
        <div class="input-group">
          <span class="input-group-addon">Science Name</span>
          <!-- <input type="text" class="form-control" name='unit' placeholder="Unit"> -->
          {{ Form::text("scienceName", null, ["class" => "form-control"] ,["placeholder"=>"Unit"]) }}
        </div>
        <div class="input-group">
          <span class="input-group-addon">Unit</span>
          <!-- <input type="text" class="form-control" name='amount' placeholder="Amount"> -->
          {{ Form::text("unit", null, ["class" => "form-control"] ,["placeholder"=>"Amount"]) }}
        </div>
        <div class="input-group">
          <span class="input-group-addon">Quantity</span>
          <!-- <input type="text" class="form-control" name='value'placeholder="Value"> -->
          {{ Form::text("quantity", null, ["class" => "form-control"] ,["placeholder"=>"Value"]) }}
        </div>
        
      </div>
      <div class="modal-footer">
        <button onclick='addRowsOfPP2()' type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>


      @stop