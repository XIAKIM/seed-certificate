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

<<<<<<< HEAD
<div class="page-header">
	<h1>Request for Import List (PP8)</h1>
</div>

<table class="table table-bordered">
        <thead>
          <tr>
            <th>Field</th>
            <th>Request Form</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Species Type</td>
            <td>{{ $pp8->speciesType }}</td>
          </tr>
          <tr>
            <td>Species Name</td>
            <td>{{ $pp8->speciesName }}</td>
          </tr>
          <tr>
            <td>Scientific Name</td>
            <td>{{ $pp8->scientificName }}</td>
          </tr>
          <tr>
            <td>Unit</td>
            <td>{{ $pp8->unit }}</td>
          </tr>
          <tr>
            <td>Source</td>
            <td>{{ $pp8->source }}</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>{{ $pp8->amount }}</td>
          </tr>
        </tbody>
      </table>

  <div class="row">
      <div class="col-md-12">
        @if(Requests::find($pp8->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["PP8Controller@createCertificatePP8", $pp8->id]]) }}
              {{ Form::submit('Verify', ["class" => "btn btn-success"])}}
          {{ Form::close() }}
        <button data-toggle="modal" href="#denySignup" type="button" class="btn btn-danger">Deny</button>
          <!-- Modal -->
          <div class="modal fade" id="denySignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
               <!--  <div class="modal-header">
                 -->  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <br>
                  <h4 class="modal-title">Comment :</h4>
                <!-- </div> -->
                <div class="modal-body">
                    {{ Form::open(["action" => ["PP8Controller@denyRequestPP8", $pp8->id]]) }}
                      {{ Form::textarea('comment', null, ["rows" => "5", "cols" => "80"]) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      {{ Form::submit('Submit', ["class" => "btn btn-primary"])}}  
                  {{ Form::close() }}

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        @endif
      </div>
    </div>
@stop
=======
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
>>>>>>> 96fb6c7f44e0a7f77e141a60816f5f2c4fcb693d
