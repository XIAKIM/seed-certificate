@extends('index')
@section('content')

<div class="page-header">
  <h1>General Information</h1>
</div>

 <div class="bs-docs-grid">
<div class="row">
  <div class="col-md-1">Name :  </div>
  <div class="col-md-5"></div>
  <div class="col-md-1">Age : </div>
  <div class="col-md-1"></div>
  <div class="col-md-2">Nationality : </div>
  <div class="col-md-2"></div>
</div>

<div class="row">
  <div class="col-md-3">Identification Type : </div>
  <div class="col-md-3"></div>
  <div class="col-md-3"> Identification Number: </div>
  <div class="col-md-3"></div>
</div>

<div class="row">
  <div class="col-md-3">Issued District : </div>
  <div class="col-md-3"></div>
  <div class="col-md-3">Issued Province : </div>
  <div class="col-md-3"></div>
</div>


<div class="row">
  <div class="col-md-3">Address: </div>
  <div class="col-md-9"><p></p></div>
</div>

<div class="row">
  <div class="col-md-3">Tel Number : </div>
  <div class="col-md-3"></div>
</div>

<div>
<button type="button" class="btn btn-default">Default</button>

<button data-toggle="modal" href="#formSignup" type="button" class="btn btn-default">Default</button>
  <!-- Modal -->
  <div class="modal fade" id="formSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
       <!--  <div class="modal-header">
         -->  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <br>
          <h4 class="modal-title">Comment :</h4>
        <!-- </div> -->
        <div class="modal-body">
          <textarea rows='5' cols="85"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>
</div>



@stop