
@section('content')
<div class = "container">
	<h1>Request Form (PP1)</h1>
	<div class="row">

	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>Request for Certificate of
				Collecting, Selling, Importing or
				Exporting Seed (PP1)</h2>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body ">
						Request Number: {{ $request->id }}
						<br />
						Approved Date: 
						<br />
						Officer Name:
					</div>

				</div>
				<p>
					Created Date: {{ $request->created_at }}
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<p>
					<label>Name:</label> {{ $description->name }} {{ $description->lastName }}
					
					<label>Age:</label> {{ $description->age }}
					
					<label>Nationality:</label> {{ $description->nationality }}
					
					<label>Identification Type:</label> {{ $description->identificationType }}
					
					<label>Identification Number: </label> {{ $description->identificationNumber }}
					
					<label>Issued District:</label> {{ $description->issuedDistrict }}
					
					<label>Issued Province:</label> {{ $description->issuedProvince }}
					
					<!-- <label>Address:</label>  {{ $description->address }} -->
					<label>Address: </label>
					{{ $description->userAddressNo }}
					<label>Moo: </label>
					{{ $description->userAddressMoo }}



					<label>Soi: </label>
					{{ $description->userAddressSoi }}
					<label>Road: </label>
					{{ $description->userAddressRoad }}				



					<label>Sub District: </label>
					{{ $description->userAddressSubDistrict }}
					<label>District: </label>
					{{ $description->userAddressDistrict }}



					<label>Province: </label>
					{{ $description->userAddressProvince }}
					<label>	PostalCode: </label>
					{{ $description->userAddressPostalCode }}


					<br />
					<label>Tel Number:</label> {{ $description->telNumber }}
					<br />
					<label>Desired Certificate Type:</label> พพ{{ $type['type'] }}.

					<label>Certificate of Collecting Seed</label>
					<br />
				</p>
				{{ Form::open(["route" => "/createPP1Request", "role" => "form"]) }}
				<!-- <form role="form"> -->
				<div class="form-group">
					<label>Company Name:</label>
					<!-- <input type="text" class="form-control"> -->
					{{ Form::text("companyName", null, ["class" => "form-control"] ) }}	
					<label>Owner Name:</label>
					<!-- <input type="text" class="form-control"> -->
					{{ Form::text("ownerName", null, ["class" => "form-control"] ) }}	
				</div>

				<div class="form-group">
        			<label for="addressNoLabel" class="col-lg-2 control-label">Address</label>
        		<div class="col-lg-3">
        			{{ Form::text("companyAddressNo", null, ["class" => "form-control"]) }}
        		</div>

            		<label for="MooLabel" class="col-lg-1 control-label">Moo</label>
            	<div class="col-lg-3">
                	{{ Form::text("companyAddressMoo", null, ["class" => "form-control"]) }}
            	</div>
              
        		</div>

       			<div class="form-group">           

            		<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
           		<div class="col-lg-3">
                	{{ Form::text("companyAddressSoi", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="RoadLabel" class="col-lg-1 control-label">Road</label>
            	<div class="col-lg-3">
                	{{ Form::text("companyAddressRoad", null, ["class" => "form-control"]) }}
            	</div>  
        		</div>

        		<div class="form-group">

            		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            	<div class="col-lg-3">
                	{{ Form::text("companyAddressSubDistrict", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="DistrictLabel" class="col-lg-1 control-label">District</label>
            	<div class="col-lg-3">
                	{{ Form::text("companyAddressDistrict", null, ["class" => "form-control"]) }}
            	</div>           
            
        		</div>

        <div class="form-group">            

            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
            <div class="col-lg-3">
                {{ Form::text("companyAddressProvince", null, ["class" => "form-control"]) }}
            </div>

            <label for="PostalCodeLabel" class="col-lg-1 control-label">Postal Code</label>
            <div class="col-lg-3">
                {{ Form::text("companyAddressPostalCode", null, ["class" => "form-control"]) }}
            </div>
            
        </div>

				<div class="form-group">
        			<label for="addressNoLabel" class="col-lg-2 control-label">Address</label>
        		<div class="col-lg-3">
        			{{ Form::text("collectingLocationNo", null, ["class" => "form-control"]) }}
        		</div>

            		<label for="MooLabel" class="col-lg-1 control-label">Moo</label>
            	<div class="col-lg-3">
                	{{ Form::text("collectingLocationMoo", null, ["class" => "form-control"]) }}
            	</div>
              
        		</div>

       			<div class="form-group">           

            		<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
           		<div class="col-lg-3">
                	{{ Form::text("collectingLocationSoi", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="RoadLabel" class="col-lg-1 control-label">Road</label>
            	<div class="col-lg-3">
                	{{ Form::text("collectingLocationRoad", null, ["class" => "form-control"]) }}
            	</div>  
        		</div>

        		<div class="form-group">

            		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            	<div class="col-lg-3">
                	{{ Form::text("collectingLocationSubDistrict", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="DistrictLabel" class="col-lg-1 control-label">District</label>
            	<div class="col-lg-3">
                	{{ Form::text("collectingLocationDistrict", null, ["class" => "form-control"]) }}
            	</div>           
            
        		</div>

        <div class="form-group">            

            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
            <div class="col-lg-3">
                {{ Form::text("collectingLocationProvince", null, ["class" => "form-control"]) }}
            </div>

            <label for="PostalCodeLabel" class="col-lg-1 control-label">Postal Code</label>
            <div class="col-lg-3">
                {{ Form::text("collectingLocationPostalCode", null, ["class" => "form-control"]) }}
            </div>
            
        </div>

				<div class="form-group">
        			<label for="addressNoLabel" class="col-lg-2 control-label">Address</label>
        		<div class="col-lg-3">
        			{{ Form::text("storingAddressNo", null, ["class" => "form-control"]) }}
        		</div>

            		<label for="MooLabel" class="col-lg-1 control-label">Moo</label>
            	<div class="col-lg-3">
                	{{ Form::text("storingAddressMoo", null, ["class" => "form-control"]) }}
            	</div>
              
        		</div>

       			<div class="form-group">           

            		<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
           		<div class="col-lg-3">
                	{{ Form::text("storingAddressSoi", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="RoadLabel" class="col-lg-1 control-label">Road</label>
            	<div class="col-lg-3">
                	{{ Form::text("storingAddressRoad", null, ["class" => "form-control"]) }}
            	</div>  
        		</div>

        		<div class="form-group">

            		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            	<div class="col-lg-3">
                	{{ Form::text("storingAddressSubDistrict", null, ["class" => "form-control"]) }}
            	</div>  

            		<label for="DistrictLabel" class="col-lg-1 control-label">District</label>
            	<div class="col-lg-3">
                	{{ Form::text("storingAddressDistrict", null, ["class" => "form-control"]) }}
            	</div>           
            
        		</div>

        <div class="form-group">            

            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
            <div class="col-lg-3">
                {{ Form::text("storingAddressProvince", null, ["class" => "form-control"]) }}
            </div>

            <label for="PostalCodeLabel" class="col-lg-1 control-label">Postal Code</label>
            <div class="col-lg-3">
                {{ Form::text("storingAddressPostalCode", null, ["class" => "form-control"]) }}
            </div>
            
        </div>

				<div class="form-group">
					<button class="btn btn-default">Reset</button>
					{{ Form::submit('Submit', ["class" => "btn btn-primary"])}}
				</div>
				<!-- </form> -->
				{{ Form::close() }}

			</div>

		</div>
	</div>
	@stop