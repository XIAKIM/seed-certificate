
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
							Request Number:
							<br />
							Approved Date:
							<br />
							Officer Name:
						</div>

					</div>
					<p>
						Created Date:
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
<p>
					<label>Name:</label> ________________________
					
					<label>Age:</label> ______
					
					<label>Nationality:</label> ____________
					
					<label>Identification Type:</label> _______________
					
					<label>Identification Number: </label>______________
					
					<label>Issued District:</label> __________________
					
					<label>Issued Province:</label> __________________
					
					<label>Address:</label>  ______________________________________________________
					______________________________________________________
					______________________________________________________
					<br />
					<label>Tel Number:</label> _________________
					<br />
					<label>Desired Certificate Type:________</label>
					
					<label>Certificate of Collecting Seed________</label>
					<br />
					</p>
					{{ Form::open(["route" => "/requestPP1", "role" => "form"]) }}
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
					<!-- </form> -->
					 {{ Form::close() }}

				</div>

			</div>
		</div>
@stop