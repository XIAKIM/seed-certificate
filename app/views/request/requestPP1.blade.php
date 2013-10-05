
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
					
					<label>Address:</label>  {{ $description->address }}
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
							<label>Company Address:</label>
							<!-- <input type="textarea" class="form-control"> -->
							{{ Form::text("companyAddress", null, ["class" => "form-control"] ) }}	
						</div>
						<div class="form-group">
							<label>Collecting Location:</label>
							<!-- <input type="textarea" class="form-control"> -->
							{{ Form::text("collectingLocation", null, ["class" => "form-control"] ) }}	
						</div>
						<div class="form-group">
							<label>Storing Location:</label>
							<!-- <input type="textarea" class="form-control"> -->
							{{ Form::text("storingLocation", null, ["class" => "form-control"] ) }}	
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