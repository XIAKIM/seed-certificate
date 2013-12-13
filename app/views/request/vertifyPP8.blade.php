@extends('index')
@section('content')
<div class="page-header">
	<h1>Request for Import List (PP8)</h1>
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

<div class="col-md-4"></div>

<div class="col-md-2"></div>

<br>

<table id='table' class="table">
	<tr id='addRow'>
		<th>No</th>
		<th>Type</th>
		<th>Common Name</th>
		<th>Science Name</th>
		<th>Unit</th>
		<th>Amount</th>
		<th>Value</th>
		<th>Departure<br>Country</th>
		<th>Imported<br>Checkpoint</th>
		<th>Imported<br>Date</th>

	</tr>
</table>



<div class="btn-group">

	<button type="button" class="btn btn-default">Verify</button>
	<button data-toggle="modal" href="#vertifyPP8" type="button" class="btn btn-default">Deny</button>
	<!-- Modal -->
	<div class="modal fade" id="vertifyPP8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
	   <!--  <div class="modal-header">-->  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   				<br>
			   	<h4 class="modal-title">Comment :</h4>
   <!-- </div> -->
				<div class="modal-body">
					<textarea rows='5' cols="85"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit</button>
			   	</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>

@stop
