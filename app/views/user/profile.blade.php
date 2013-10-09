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
			<div class="col-md-9"><p>{{ $description->address }}</p></div>
		</div>

		<div class="row">
			<div class="col-md-2">Tel Number : </div>
			<div class="col-md-3">{{ $description->telNumber }}</div>
		</div>

		<a href="/profile/edit" class="btn btn-default">Edit</a>
	</div>

@stop
