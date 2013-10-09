@extends('index')
@section('content')
	<h2>Hello, {{ Auth::user()->username }}</h2>
	<img src="" alt="" class="img-thumbnail">
	<div class="bs-docs-grid">
		<div class="row">
			<div class='col-md-1'>User :</div>
			<div class='col-md-2'>{{ Auth::user()->username }}</div>
		</div>

		<div class="row">
			<div class="col-md-1">Name :  </div>
			<div class="col-md-4">{{ $description->name }} {{ $description->lastName }}</div>
			<div class="col-md-1">Age : </div>
			<div class="col-md-2">{{ $description->age }}</div>
			<div class="col-md-2">Nationality : </div>
			<div class="col-md-2">{{ $description->nationality }}</div>
		</div>

		<div class="row">
			<div class="col-md-2">Identification Type : </div>
			<div class="col-md-4">{{ $description->identificationType }}</div>
			<div class="col-md-3"> Identification Number: </div>
			<div class="col-md-4">{{ $description->identificationNumber }}</div>
		</div>

		<div class="row">
			<div class="col-md-2">Issued District : </div>
			<div class="col-md-4">{{ $description->issuedDistrict }}</div>
			<div class="col-md-2">Issued Province : </div>
			<div class="col-md-4">{{ $description->issuedProvince }}</div>
		</div>


		<div class="row">
			<div class="col-md-1">Address: </div>
			<div class="col-md-1"><p>{{ $description->userAddressNo }}</p></div>
			<div class="col-md-1">Moo: </div>
			<div class="col-md-1"><p>{{ $description->userMoo }}</p></div>
			<div class="col-md-1">Soi: </div>
			<div class="col-md-1"><p>{{ $description->userSoi }}</p></div>
			<div class="col-md-1">Road: </div>
			<div class="col-md-1"><p>{{ $description->userRoad }}</p></div>
			<div class="col-md-1">subDistrict: </div>
			<div class="col-md-2"><p>{{ $description->userSubDistrict }}</p></div>
		</div>

		<div class="row">
			<div class="col-md-1">District: </div>
			<div class="col-md-2"><p>{{ $description->userAddressDistrict }}</p></div>
			<div class="col-md-1">Province: </div>
			<div class="col-md-2"><p>{{ $description->userAddressProvince }}</p></div>
			<div class="col-md-1">PostalCode: </div>
			<div class="col-md-1"><p>{{ $description->userAddressPostalCode }}</p></div>
			
		</div>		

		<div class="row">
			<div class="col-md-2">Tel Number : </div>
			<div class="col-md-3">{{ $description->telNumber }}</div>
		</div>

		<a href="/profile/edit" class="btn btn-default">Edit</a>
	</div>

@stop
