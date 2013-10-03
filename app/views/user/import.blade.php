@extends('index')
@section('content')

<div class="page-header">
  <h1>Import List</h1>
</div>


<div class="row">
  <div class="col-md-6">
   <!-- Button trigger modal -->
   <button   data-toggle="modal" href="#formModel"class="btn btn-default" type="button">Add!</button>
   <!-- Modal -->
   <div class="modal fade" id="formModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
            ......
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button onclick='addRowsOfImport()' type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div>



<div class="col-md-4"></div>

<div class="col-md-2">
 <button type="reset" class="btn btn-default">Reset</button>
</div>
</div>
<br>

<table id='table' class="table">
  <tr id='addRow'>
    <th width='100px'>No</th>
    <th>Type</th>
    <th>Name</th>
    <th>ScienceName</th>
    <th>Unit</th>
    <th>Origin</th>
    <th>Amount</th>
  </tr>
</table>

<div class="btn-group">
  <button type="button" class="btn btn-default">Back</button>
  <button type="button" class="btn btn-default">Submit</button>

</div>
@stop