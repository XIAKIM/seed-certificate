@extends('index')
@section('content')
	<h2>Hello, {{ Auth::user()->username }}</h2>
	<img src="" alt="" class="img-thumbnail">
	<div class="panel panel-default">
		<div class="panel-body">
		<form class="form-horizontal" role="form">
			<!-- User  -->			
			<div class="row form-group">
				<label class="col-md-1 control-label"> User  </label>
				<div class='col-md-11'>
					<div class="form-control">{{ Auth::user()->username }}</div>
				</div>
			</div>
			<!-- Name  -->			
			<div class="row form-group">
				<label class="col-md-1 control-label">Name  </label>
				<div class="col-md-11"> 
					<div class="form-control">{{ $description->name }} {{ $description->lastName }}</div>
				</div>
			</div>
			<!-- Age and Nationality -->			
			<div class-"row form-group">
				<label class="col-md-1 control-label">Age  </label>
				<div class="col-md-1">
					<div class="form-control">{{ $description->age }}</div>
				</div>
				<label class="col-md-2 control-label"> Nationality  </label>	
				<div class="col-md-2">
					<div class="form-control">{{ $description->nationality }}</div>	
				</div>
			</div>

			<div class="row form-group">
				<label class="col-md-2 control-label"> Identification Type  </label> 
				<div class="col-md-2">
					<div class="col-md-4 form-control">{{ $description->identificationType }}</div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-2 control-label">Identification Number  </label> 			
				<div class="col-md-5">
					<div class="col-md-5 form-control"> {{ $description->identificationNumber}} </div>
				</div>			
			</div>
		<div class="row form-group">
			<label class="col-md-2 control-label">Issued District  </label>
			<div class="col-md-4">
				<div class="form-control">{{ $description->issuedDistrict }}</div>
			</div>
			<label class="col-md-2 control-label">Issued Province  </label>
			<div class="col-md-4">
				<div class="form-control"> {{ $description->issuedProvince }}</div>
			</div>
		</div>
		<div class="row form-group">
			<label class="col-md-2 control-label"> Address No.  </label>
			<div class="col-md-1">
				<div class="form-control"><p>{{ $description->userAddressNo }}</p></div>
			</div>

			<label class="col-md-1 control-label">Moo </label>
			<div class="col-md-1">
				<div class="form-control"><p>{{ $description->userAddressMoo }}</p></div>
			</div>			


			<label class="col-md-1 control-label">Soi </label>
			<div class="col-md-1">
				<div class="form-control"><p>{{ $description->userAddressSoi }}</p></div>
			</div>

			<label class="col-md-1 control-label">Road </label>
			<div class="col-md-1">
				<div class="form-control"><p>{{ $description->userAddressRoad }}</p></div>
			</div>
		</div>

		<div class="row form-group">
			<label class="col-md-2 control-label">Sub District  </label>
			<div class="col-md-4">
				<div class="form-control"><p>{{ $description->userAddressSubDistrict }}</p></div>
			</div>

			<label class="col-md-2 control-label">District </label>
			<div class="col-md-4">
				<div class="form-control"><p>{{ $description->userAddressDistrict }}</p></div>
			</div>
		</div>

		<div class="row form-group">
			<label class="col-md-2 control-label">Province </label>
			<div class="col-md-4">
				<div class="form-control"><p>{{ $description->userAddressProvince }}</p></div>
			</div>
			
			<label class="col-md-2 control-label">PostalCode: </label>
			<div class="col-md-4">
				<div class="form-control"><p>{{ $description->userAddressPostalCode }}</p></div>
			</div>
		</div>

		<div class="row form-group">
			<label class="col-md-2 control-label">Tel Number  </label>
			<div class="col-md-4">
				<div class="form-control">{{ $description->telNumber }}</div>
			</div>
		</div>

		<a href="/profile/changepassword" class="btn btn-default">Change Password</a>
		</form>
	</div>
</div>

@stop
