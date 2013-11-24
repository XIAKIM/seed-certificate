@extends('index')
@section('content')
<div class="head_sec">
<div class="col-md-6 text-left"> <p><strong>PP2 </strong></p> </div>
<div class="col-md-6 text-right"> <p><strong> Request No. {{$pp2->requestID}} </p></div>
</div>
<h1 class="text-center">Seed Passing Request Form</h1><br>
<div class="main">
	<div class="row">
		<div class="col-xs-3 text-right"><p><strong> Name : </strong></p></div>
		<div class="col-xs-9 text-left">
			{{Description::find(user::find($pp2->userID)->descriptionID)->name}} {{Description::find(User::find($pp2->userID)->descriptionID)->lastName}}
		</div>
	</div>
	<div class="row"> 	
		<div class="col-xs-3 text-right"><p><strong> Age : </strong></p></div> 
		<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp2->userID)->descriptionID)->age }}</div>
		<div class="col-xs-3 text-right"><p><strong> Nationality : </strong></p> </div>
		<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp2->userID)->descriptionID)->nationality }} </div>
	</div>
	<div class="row"> 	
		<div class="col-xs-3 text-right"><p><strong> Identification Type : </strong> </p></div> 
		<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp2->userID)->descriptionID)->identificationType }} </div>
		<div class="col-xs-3 text-right"><p><strong> Identification Number : </strong> </p></div> 
		<div class="col-xs-3 text-left"> {{ Description::find(User::find($pp2->userID)->descriptionID)->identificationNumber }} </div>
	</div>
    <div class="row">
		<div class="col-xs-3 text-right"><strong>From district : </strong></div>
		<div class="col-xs-3 text-left"> {{Description::find(User::find($pp2->userID)->descriptionID)->issuedDistrict}} </div>
		<div class="col-xs-3 text-right"><strong>Province : </strong></div>
		<div class="col-xs-3 text-left"> {{Description::find(User::find($pp2->userID)->descriptionID)->issuedProvince}} </div>
  	</div>
	<div class="row"> 	
		<p>
		<div class="col-xs-3 text-right"> <strong> Adress : </strong> </div> 
		<div class="col-xs-9 text-left"> 
			{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressNo }} 
			m.{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressMoo }}
			soi.{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressSoi }}        	
			{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressRoad }}.rd
			{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressSubDistrict }} ,
			{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressDistrict }} ,
			{{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressProvince }} ,
			Thailand , {{ Description::find(User::find($pp2->userID)->descriptionID)->userAddressPostalCode }} 
		</div>
		</p>
	</div>
	<div class="row">
		<p>
		<div class="col-xs-3 text-right"> <strong> Telephone No. : </strong> </div>
		<div class="col-xs-9 text-left"> {{ Description::find(User::find($pp2->userID)->descriptionID)->telNumber }} </div>
		</p>
	</div>
<!--
  <div class="row">
    <div class="col-md-7"><p><strong>Name</strong></p></div>
    <div class="col-md-2"><p><strong>Age</strong></p></div>
    <div class="col-md-3"><p><strong>Nationality</strong></p></div>
  </div>
  <div class="row">
    <div class="col-md-6"><p><strong>Identification Type</strong></p></div>
    <div class="col-md-4"><p><strong>Identification Number</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>From district</strong></p></div>
    <div class="col-md-6"><p><strong>Province</strong></p></div>
  </div>
  <div class="row">
      <div class="col-md-4"><p><strong>Address no</strong></p></div>
      <div class="col-md-2"><p><strong>Moo</strong></p></div>
      <div class="col-md-2"><p><strong>Soi</strong></p></div>
      <div class="col-md-4"><p><strong>Road</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>SubDistrict</strong></p></div>
    <div class="col-md-4"><p><strong>District</strong></p></div>
    <div class="col-md-4"><p><strong>Province</strong></p></div>
  </div>

  <div class="row">
      <div class="col-md-6"><p><strong>Post code</strong></p></div>
      <div class="col-md-6"><p><strong>Phone</strong></p></div>
  </div>
-->
	<div class="row">
		<p>
		<div class="col-xs-4 text-right"><strong>want to request passing certificate on behalf of</strong></div>
		<div class="col-xs-8 text-left"> {{$pp2->companyName}} </div>
		</p>
	</div>

	<div class="row">
		<p>
		<div class="col-xs-4 text-right"><p><strong>driven by</strong></p></div>
		<div class="col-xs-8 text-left"> {{$pp2->ownerName}} </div>
		</p>
	</div>
	<div class="row">
		<div class="col-xs-3 text-right"> <strong> Company Address : </strong> </div>
		<div class="col-xs-9 text-left"> 
			{{ $pp2->companyAddressNo }} m.{{ $pp2->companyAddressMoo }}
			soi.{{ $pp2->companyAddressSoi }} {{ $pp2->companyAddressRoad }}.rd
			{{ $pp2->companyAddressSubDistrict }} , {{ $pp2->companyAddressDistrict }} , 
			{{ $pp2->companyAddressProvince }} , Thailand {{ $pp2->companyAddressPostalCode }}
		</div>
	</div>

<!--
  <div class="row">
    <div class="col-md-4"><p><strong>Company address no.</strong></p></div>
    <div class="col-md-2"><p><strong>Moo</strong></p></div>
    <div class="col-md-2"><p><strong>Soi</strong></p></div>
    <div class="col-md-4"><p><strong>Road</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>SubDistrict</strong></p></div>
    <div class="col-md-4"><p><strong>District</strong></p></div>
    <div class="col-md-4"><p><strong>Province</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>Post code</strong></p></div>
    <div class="col-md-6"><p><strong>Phone</strong></p></div>
  </div>

-->
	<div class="row">
		<p>
		<div class="col-xs-3 text-right"><strong>By bringing seed from city</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->arrivalCity}} </div>
		<div class="col-md-1 text-right"><strong>country</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->arrivalCountry}} </div>
		</p>
	</div>

	<div class="row">
		<p>
		<div class="col-md-3 text-right"><strong>pass through (checkpoint)</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->arrivalCheckpoint}} </div>
		<div class="col-md-1 text-right"><strong>by</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->arrivalVehicle}} </div>
		</p>
	</div>

	<div class="row">
		<p>
		<div class="col-md-3 text-right"><strong>to city</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->departureCity}} </div>
		<div class="col-md-1 text-right"><strong>country</strong></div>
		<div class="col-md-1 text-left"> {{$pp2->departureCountry}}</div>
		<div class="col-md-2 text-right"><strong>Road</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->transportRoute}}</div>	
		</p>
	</div>
	<div class="row">
		<p>
		<div class="col-md-3 text-right"><strong>pass through (checkpoint)</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->departureCheckpoint}} </div>
		<div class="col-md-1 text-right"><strong>by</strong></div>
		<div class="col-md-2 text-left"> {{$pp2->departureVehicle}} </div>
		</p>
	</div>

	<div class="row">
		<p>
		<div class="col-md-4 text-right"><strong>Transporting and collecting seed location : </strong></div>
		<div class="col-md-8 text-left">{{$pp2->temporayLocation}}</div>
		</p>
	</div>

  <div class="row">
	<p>
    <div class="col-md-3 text-right"><strong>Time duration for passing seed :</strong></div>
	<div class="col-md-1 text-left">{{$pp2->passingPeriod}} </div>
	<div class="col-md-1 text-left"><strong>Day</strong></div>
	</p>
  </div>

           
  </div>

  <div class="row">
      <div class="col-md-12">
        @if(Requests::find($pp2->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["PP2Controller@createCertificatePP2", $pp2->id]]) }}
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
                    {{ Form::open(["action" => ["PP2Controller@denyRequestPP2", $pp2->id]]) }}
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
