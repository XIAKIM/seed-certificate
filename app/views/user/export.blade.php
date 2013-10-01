@extends('index')
@section('content')
<div class="page-header">
  <h1>Export List</h1>
</div>


<div class="row">
  <div class="span6">
    <div class="col-lg-6">
      <div class="input-group">
        <input id='amount' type="text" class="form-control">
        <span class="input-group-btn">
          <button onclick='addRows()' class="btn btn-default" type="button">Go!</button>
        </span>
      </div>
    </div>

  </div>
  <div class='span5'></div>
  <div class="span1">

    <button type="reset" class="btn btn-default">Reset</button>
  </div>

</div>

<table id='table' class="table">
  <tr id='addRow'>
    <td>No</td>
    <td>Type</td>
    <td>Name</td>
    <td>ScienceName</td>
    <td>Unit</td>
    <td>Origin</td>
    <td>Amount</td>
  </tr>
</table>

<div class="btn-group">
  <button type="button" class="btn btn-default">Back</button>
  <button type="button" class="btn btn-default">Submit</button>

</div>

@stop