@extends('index')
@section('content')

			<h1>Request Form (PP1)</h1>
			<div class="row">
				<div class="col-md-8">
					<h2>Request for Certificate of
					Collecting, Selling, Importing or
					Exporting Seed (PP1)</h2>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-body ">
							Request Number: {{ $pp1->requestID }}
							<br />
							Approved Date:
							<br />
							Officer Name:
						</div>

					</div>
					<p>
						Created Date: {{ $pp1->created_at }}
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>
						<label>Name:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->name }} {{ Description::find(User::find($pp1->userID)->descriptionID)->lastName }}

						<label>Age:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->age }}

						<label>Nationality:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->nationality }}

						<label>Identification Type:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->identificationType }}

						<label>Identification Number: </label> {{ Description::find(User::find($pp1->userID)->descriptionID)->identificationNumber }}

						<label>Issued District:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->issuedDistrict }}

						<label>Issued Province:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->issuedProvince }}

						<label>Address:</label>  {{ Description::find(User::find($pp1->userID)->descriptionID)->address }}
						<br />
						<label>Tel Number:</label> {{ Description::find(User::find($pp1->userID)->descriptionID)->telNumber }}
						<br />
						<label>Desired Certificate Type: พพ{{ $pp1->certificateType }}.</label>

						<label>
							Certificate of  
							@if($pp1->certificateType == 3)
								Collecting 
							@elseif($pp1->certificateType == 4)
								Selling
							@elseif($pp1->certificateType == 5)
								Importing
							@else
								Exporting
							@endif
							Seed
						</label>
						<br />

						<label>Company Name:</label>
						{{ $pp1->companyName }}

						<label>Owner Name:</label>
						{{ $pp1->ownerName }}

						<label>Company Address:</label>
						{{ $pp1->companyAddress }}<br />

						<label>Collecting Location:</label>
						{{ $pp1->collectingLocation }}<br />

						<label>Storing Address:</label>
						{{ $pp1->storingAddress }}

					</p>
				</div>
			</div>
		<div class="row">
			<div class="col-md-12">
				@if(Requests::find($pp1->requestID)->status == 'Waiting')
					{{ Form::open(["action" => ["RequestController@pp1VerifyAction", $pp1->id]]) }}
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
				          	{{ Form::open(["action" => ["RequestController@pp1DenyAction", $pp1->id]]) }}
				            	{{ Form::textarea('comment', null, ["rows" => "5", "cols" => "85"]) }}
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