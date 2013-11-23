@extends('index')
@section('content')
<div class="page-header">
	<h1>Seed Passing Request</h1>
</div>
	{{ Form::open(["route" => "/saverequestpp2", "role" => "form" , "class"=>"form-horizontal"]) }}
<div class="row">
	<div class="form-group">
		<label for="companyName" class="col-lg-2 control-label">Company Name</label>
		<!-- <input type="text" class="form-control"> -->
		<div class="col-lg-8">
			{{ Form::text("companyName", null, ["class" => "form-control"] ) }}	
		</div>
	</div>
	
	<div class="form-group"> 
		<label for="owerName" class="col-lg-2 control-label">Owner Name</label>
		<div class="col-lg-8">
						<!-- <input type="text" class="form-control"> -->
			{{ Form::text("ownerName", null, ["class" => "form-control"] ) }}	
		</div>	
	</div>
	
	<div class="form-group">
        <label for="addressNoLabel" class="col-lg-2 control-label">Address No.</label>
        <div class="col-lg-3">
        	{{ Form::text("companyAddressNo", null, ["class" => "form-control"]) }}
		</div>
        <label for="MooLabel" class="col-lg-2 control-label">Moo</label>
    	<div class="col-lg-3">
       		{{ Form::text("companyAddressMoo", null, ["class" => "form-control"]) }}
		</div>
    </div>
	<div class="form-group">
    	<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
		<div class="col-lg-3">	
			{{ Form::text("companyAddressSoi", null, ["class" => "form-control"]) }}
		</div>
		<label for="RoadLabel" class="col-lg-2 control-label"> Road </label>
		<div class="col-lg-3">
			{{ Form::text("companyAddressRoad", null, ["class" => "form-control"]) }}
		</div>
	</div>

	<div class="form-group">
		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub-District</label>
		<div class="col-lg-3">
			{{ Form::text("companyAddressSubDistrict", null, ["class" => "form-control"]) }}
		</div>
		<label for="DistrictLabel" class="col-lg-2 control-label">District</label>
		<div class="col-lg-3">
			{{ Form::text("companyAddressDistrict", null, ["class" => "form-control"]) }}
		</div>
	</div>  
	
	<div class="form-group">            
		<label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
		<div class="col-lg-3">
			{{ Form::text("companyAddressProvince", null, ["class" => "form-control"]) }}
		</div>
		<label for="PostalCodeLabel" class="col-lg-2 control-label">Postal Code</label>
		<div class="col-lg-3">
			{{ Form::text("companyAddressPostalCode", null, ["class" => "form-control"]) }}
		</div>
	</div>
</div>


<div class='row'>
	<div class ='col-md-5 col-md-offset-1'>
		<label class="control-label"> Seed locatiion before passing </label>
	</div>
</div>
<br>
<div class ="row">
	<div class ='col-md-2'></div>
	<div class ='col-md-2'><label class="control-label">City</label></div>
	<div class ='col-md-3'> {{ Form::text("arrivalCity", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'><label class="control-label">Country</label></div>
	<div class ='col-md-3'>{{ Form::text("arrivalCountry", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class ='row'>
	<div class ='col-md-2'></div>
	<div class= 'col-md-2'><label class="control-label">Check Point</label></div>
	<div class ='col-md-3'>{{ Form::text("arrivalCheckpoint", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'><label class="control-label">Vehicle</label></div>
	<div class = 'col-md-3'>{{ Form::text("arrivalVehicle", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class='row'>
	<div class ='col-md-5 col-md-offset-1'>
		<label class="control-label">Seed location after passing </label>
	</div>
</div>
<br>
<br>
<div class ="row">
	<div class ='col-md-2'></div>
	<div class ='col-md-2'><label class="control-label">City</label></div>
	<div class ='col-md-3'>{{ Form::text("departureCity", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'><label class="control-label">Country</label></div>
	<div class ='col-md-3'>{{ Form::text("departureCountry", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class ='row'>
	<div class ='col-md-2'></div>
	<div class= 'col-md-2'><label class="control-label">Check Point</label></div>
	<div class ='col-md-3'>{{ Form::text("departureCheckpoint", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'><label class="control-label">Vehicle</label></div>
	<div class = 'col-md-3'>{{ Form::text("departureVehicle", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class='row'>
	<div class ='col-md-2 col-md-offset-2'><label class="control-label">Transport Route</label> </div>
	<div class ='col-md-7'>{{ Form::text("transportRoute", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class='row'>
	<div class='col-md-1'></div>
	<div class ='col-md-3'><label class="control-label">Transporting and collecting seed location</label></div>
	<div class='col-md-7'> {{ Form::text("temporayLocation",null,["class" => "form-control" ]) }} </div>
</div>
<br>

<div class ='row'>
	<div class ='col-md-2'></div>
	<div class= 'col-md-2'><label class="control-label">Time duration</label></div>
	<div class ='col-md-3'>{{ Form::text("passingPeriod", null, ["class" => "form-control" ]) }}</div>
</div>

<div class ='row'>
	<div class = 'col-md-1 col-md-offset-8'>{{ Form::button("Back",  ["class" => "btn btn-default "   ]) }}</div>
	<div class = 'col-md-1'>{{ Form::Submit("Submit",  ["class" => "btn btn-default "   ]) }}</div>
</div>

{{ Form::close() }}

@stop
