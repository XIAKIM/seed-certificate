:w

@section('content')
<div class = "container">
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
					Request Number: {{ $request->id }}<br />
					Approved Date: <br />
					Officer Name:
				</div>
			</div>
			<p>	Created Date: {{ $request->created_at }}</p>
		</div>
	</div>
	<div class="panel-body">
		<div class="col-md-12">
			<p>	
				<hr>
				<div class="row"> 	
					<div class="col-xs-3 text-right"> <strong> Name : </strong> </div> 
					<div class="col-xs-9 text-left"> {{ $description->name }} {{ $description->lastName }} </div>
				</div>
				<div class="row"> 	
					<div class="col-xs-3 text-right"> <strong> Age : </strong> </div> 
					<div class="col-xs-3 text-left"> {{ $description->name }} {{ $description->lastName }} </div>
					<div class="col-xs-3 text-right"> <strong> Nationality : </strong> </div>
					<div class="col-xs-3 text-left"> {{ $description->nationality }} </div>
				</div>
				<div class="row"> 	
					<div class="col-xs-3 text-right"> <strong> Identification Type : </strong> </div> 
					<div class="col-xs-3 text-left"> {{ $description->identificationType }} </div>
					<div class="col-xs-3 text-right"> <strong> Identification Number : </strong> </div> 
					<div class="col-xs-3 text-left"> {{ $description->identificationNumber }} </div>
				</div>
				<div class="row"> 	
					<div class="col-xs-3 text-right"> <strong> Issued District : </strong> </div> 
					<div class="col-xs-3 text-left"> {{ $description->issuedDistrict }} </div>
					<div class="col-xs-3 text-right"> <strong> Issued Province : </strong> </div> 
					<div class="col-xs-3 text-left"> {{ $description->issuedProvince }} </div>
				</div>
				<div class="row"> 	
					<div class="col-xs-3 text-right"> <strong> Adress : </strong> </div> 
					<div class="col-xs-9 text-left"> 
						{{$description->userAddressNo}} m. {{$description->userAddressMoo }} soi. {{$description->userAddressSoi}} {{$description->userAddressRoad}}.rd {{$description->userAddressSubDistrict}} , {{$description->userAddressDistrict}} , {{$description->userAddressProvince}} , {{$description->userAddressProvince}} , Thailand {{$description->userAddressPostalCode}}
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3 text-right"> <strong> Telephone No. : </strong> </div>
						<div class="col-xs-9 text-left"> {{$description->telNumber}} </div>
					</div>	
					<hr>
					<div class="row">
						<div class="col-xs-3 text-right"> <strong> Desired Certificate Type : </strong></div>
						<div class="col-xs-9 text-left"> พพ{{$type['type']}}.  </div>
					</div>
					<hr>
				</p>
				{{ Form::open(["route" => "/createPP1Request", "role" => "form" , "class"=>"form-horizontal"]) }}
				<!-- <form class="form-horizontal" role="form"> -->
				<div class="form-group">
					<label for="companyName" class="col-lg-2 control-label">Company Name</label>
					<!-- <input type="text" class="form-control"> -->
					<div class="col-lg-10">
					{{ Form::text("companyName", null, ["class" => "form-control"] ) }}	
					</div>
				</div>
				<div class="form-group"> 
					<label for="owerName" class="col-lg-2 control-label">Owner Name</label>
					<div class="col-lg-10">
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
				<hr>
				<div> <h3> Collecting Adress  </h3> </div>
				<div class="form-group">
        			<label for="addressNoLabel" class="col-lg-2 control-label">Address</label>
        			<div class="col-lg-3">
        				{{ Form::text("collectingLocationNo", null, ["class" => "form-control"]) }}
        			</div>
            		<label for="MooLabel" class="col-lg-2 control-label">Moo</label>
            		<div class="col-lg-3">
                		{{ Form::text("collectingLocationMoo", null, ["class" => "form-control"]) }}
            		</div> 
        		</div>
       			<div class="form-group">           
            		<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
           				<div class="col-lg-3">
               		 		{{ Form::text("collectingLocationSoi", null, ["class" => "form-control"]) }}
            			</div>  
            			<label for="RoadLabel" class="col-lg-2 control-label">Road</label>
            				<div class="col-lg-3">
                				{{ Form::text("collectingLocationRoad", null, ["class" => "form-control"]) }}
            			</div>  
        		</div>

        		<div class="form-group">
            		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            		<div class="col-lg-3">
               			{{ Form::text("collectingLocationSubDistrict", null, ["class" => "form-control"]) }}
            		</div>  
            		<label for="DistrictLabel" class="col-lg-2 control-label">District</label>
           			 	<div class="col-lg-3">
               		 	{{ Form::text("collectingLocationDistrict", null, ["class" => "form-control"]) }}
            			</div>           
        		</div>

		        <div class="form-group">            
		            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
       			    <div class="col-lg-3">
		                {{ Form::text("collectingLocationProvince", null, ["class" => "form-control"]) }}
            		</div>
		            <label for="PostalCodeLabel" class="col-lg-2 control-label">Postal Code</label>
		            <div class="col-lg-3">
		                {{ Form::text("collectingLocationPostalCode", null, ["class" => "form-control"]) }}
		            </div>     
				</div>		
				<hr>
				<div> <h3> Storing Address </h3> </div>
				<div class="form-group">
        			<label for="addressNoLabel" class="col-lg-2 control-label">Address No.</label>
	   	     		<div class="col-lg-3">
	        			{{ Form::text("storingAddressNo", null, ["class" => "form-control"]) }}
	        		</div>
   	         		<label for="MooLabel" class="col-lg-2 control-label">Moo</label>
	            	<div class="col-lg-3">
   		             	{{ Form::text("storingAddressMoo", null, ["class" => "form-control"]) }}
   		         	</div>
        		</div>

       			<div class="form-group">           
            		<label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
           			<div class="col-lg-3">
                		{{ Form::text("storingAddressSoi", null, ["class" => "form-control"]) }}
            		</div>  
            		<label for="RoadLabel" class="col-lg-2 control-label">Road</label>
            		<div class="col-lg-3">
                		{{ Form::text("storingAddressRoad", null, ["class" => "form-control"]) }}
            		</div>  
        		</div>

        		<div class="form-group">
            		<label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            		<div class="col-lg-3">
                		{{ Form::text("storingAddressSubDistrict", null, ["class" => "form-control"]) }}
            		</div>  
            		<label for="DistrictLabel" class="col-lg-2 control-label">District</label>
            		<div class="col-lg-3">
                		{{ Form::text("storingAddressDistrict", null, ["class" => "form-control"]) }}
            		</div>           
        		</div>

		        <div class="form-group">            
		            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
		            <div class="col-lg-3">
       		        	{{ Form::text("storingAddressProvince", null, ["class" => "form-control"]) }}
            		</div>
		            <label for="PostalCodeLabel" class="col-lg-2 control-label">Postal Code</label>
		            <div class="col-lg-3">
		                {{ Form::text("storingAddressPostalCode", null, ["class" => "form-control"]) }}
		            </div>
		        </div>
				<hr>
				<div class="form-group text-right col-lg-10">
					<p>
						<button class="btn btn-default btn-lg" type="button">Reset</button>
					{{ Form::submit('Submit', ["class" => "btn btn-primary btn-lg"])}}
					</p>
				</div>
				<!-- </form> -->
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop
