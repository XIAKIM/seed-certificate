@extends('index')
@section('content')
<div class="panel-heading">
	<h1>Request Form (PP1)</h1>
</div>
<div class="panel-body">
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
<div class="panel-body">
	<div class="col-md-12">
		<p>
			<hr>
			<div class="row"> 	
				<div class="col-xs-3 text-right"> <strong> Name : </strong> </div> 
				<div class="col-xs-9 text-left"> 
					{{Description::find(user::find($pp1->userID)->descriptionID)->name}} {{Description::find(User::find($pp1->userID)->descriptionID)->lastName}}
				</div>
			</div>
			<div class="row"> 	
				<div class="col-xs-3 text-right"> <strong> Age : </strong> </div> 
				<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp1->userID)->descriptionID)->age }}</div>
				<div class="col-xs-3 text-right"> <strong> Nationality : </strong> </div>
				<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp1->userID)->descriptionID)->nationality }} </div>
			</div>
			<div class="row"> 	
				<div class="col-xs-3 text-right"> <strong> Identification Type : </strong> </div> 
				<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp1->userID)->descriptionID)->identificationType }} </div>
				<div class="col-xs-3 text-right"> <strong> Identification Number : </strong> </div> 
				<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp1->userID)->descriptionID)->identificationNumber }} </div>
			</div>
			<div class="row"> 	
				<div class="col-xs-3 text-right"> <strong> Issued District : </strong> </div> 
				<div class="col-xs-3 text-left">  {{ Description::find(User::find($pp1->userID)->descriptionID)->issuedDistrict }}</div>
				<div class="col-xs-3 text-right"> <strong> Issued Province : </strong> </div> 
				<div class="col-xs-3 text-left">  {{ Description::find(User::find($pp1->userID)->descriptionID)->issuedProvince }} </div>
			</div>
			<div class="row"> 	
				<div class="col-xs-3 text-right"> <strong> Adress : </strong> </div> 
				<div class="col-xs-9 text-left"> 
					{{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressNo }} 
					m. {{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressMoo }}
					soi. {{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressSoi }}
					{{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressRoad }} .rd
					{{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressSubDistrict }} ,
					{{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressDistrict }} ,
					{{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressProvince }} ,
					Thailand , {{ Description::find(User::find($pp1->userID)->descriptionID)->userAddressPostalCode }} 
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 text-right"> <strong> Telephone No. : </strong> </div>
				<div class="col-xs-9 text-left"> {{ Description::find(User::find($pp1->userID)->descriptionID)->telNumber }} </div>
			</div>	
			<hr>
			<div class="row">
				<div class="col-xs-3 text-right"> <strong> Desired Certificate Type : </strong></div>
				<div class="col-xs-9 text-left">
					<label> 
					พพ {{$pp1->certificateType }}.  
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
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-xs-3 text-right"> <strong> Company Name: </strong> </div>
				<div class="col-xs-9 text-left"> {{ $pp1->companyName }} </div>
			</div>

			<div class="row">
				<div class="col-xs-3 text-right"> <strong> Company Address: </strong> </div>
				<div class="col-xs-9 text-left"> 
					{{ $pp1->companyAddressNo }} m.{{ $pp1->companyAddressMoo }}
					soi.{{ $pp1->companyAddressSoi }} {{ $pp1->companyAddressRoad }}.rd
					{{ $pp1->companyAddressSubDistrict }} , {{ $pp1->companyAddressDistrict }} , 
					{{ $pp1->companyAddressProvince }} , Thailand {{ $pp1->companyAddressPostalCode }}
				</div>
			</div>


			<div class="row">
				<div class="col-xs-3 text-right"> <strong> Collecting Address: </strong> </div>
				<div class="col-xs-9 text-left"> 
					{{ $pp1->collectingLocationNo }} m.{{ $pp1->collectingLocationMoo }}
					soi.{{ $pp1->collectingLocationSoi }} {{ $pp1->collectingLocationRoad }}.rd
					{{ $pp1->collectingLocationSubDistrict }} , {{ $pp1->collectingLocationDistrict }} , 
					{{ $pp1->collectingLocationProvince }} , Thailand {{ $pp1->collectingLocationPostalCode }}
				</div>
			</div>

			@if($pp1->certificateType == 3)
				<div class="row">
					<div class="col-xs-3 text-right"> <strong> Storing Address: </strong> </div>
					<div class="col-xs-9 text-left"> 
						{{ $pp1->storingAddressNo }} m.{{ $pp1->storingAddressMoo }}
						soi.{{ $pp1->storingAddressSoi }} {{ $pp1->storingAddressRoad }}.rd
						{{ $pp1->storingAddressSubDistrict }} , {{ $pp1->storingDistrict }} , 
						{{ $pp1->storingAddressProvince }} , Thailand {{ $pp1->storingAddressPostalCode }}
					</div>
				</div>
			@endif
			<hr>
		</p>
		<div class="row">
			<div class="col-md-12">
				@if(Requests::find($pp1->requestID)->status == 'Waiting')
					{{ Form::open(["action" => ["PP1Controller@createCertificatePP1", $pp1->id]]) }}
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
				          	{{ Form::open(["action" => ["PP1Controller@denyRequestPP1", $pp1->id]]) }}
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
	</div>
@stop