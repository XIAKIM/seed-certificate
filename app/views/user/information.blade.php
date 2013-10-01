@extends('index')
@section('content')
<div class="container">
	<div class="panel panel-default">
		<div class="row">
			<div class="panel-heading">
				<div class="col-lg-4">
					<h3 class="panel-title"> Information </h3>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-offset-8 col-lg-4">
			<div class="form-group">
				<label for="InputOwner">Owner</label>
				<input type="text" class="form-control" id="InputOwner1">
			</div>
			<div class="form-group">
				<label for="InputCompanyAddress">Company Address</label>
				<input type="text" class="form-control" id="InputCompanyAdress1" >
			</div>
			<div class="form-group">
				<label for="InputSoi">Soi</label>
				<input type="number" class="form-control" id="InputSoi1">
			</div>
			<div class="form-group">
				<label for="InputRoad">Road</label>
				<input type="text" class="form-control" id="InputRoad1">
			</div>
			<div class="form-group">
				<label for="InputTambol">Tambol</label>
				<input type="text" class="form-control" id="InputTambol1">
			</div>
			<div class="form-group">
				<label for="InputDistrict">District</label>
				<input type="text" class="form-control" id="InputDistrict1">
			</div>
			<div class="form-group">
				<label for="InputProvince">Province</label>
				<input type="text" class="form-control" id="InputProvince1">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-offset-8 col-lg-4">
			<div class="form-group">
				<label for="InputStoreAddress">Store Address</label>
				<input type="text" class="form-control" id="InputStoreAdress1" >
			</div>
			<div class="form-group">
				<label for="InputSoi">Soi</label>
				<input type="number" class="form-control" id="InputSoi2">
			</div>
			<div class="form-group">
				<label for="InputRoad">Road</label>
				<input type="text" class="form-control" id="InputRoad2">
			</div>
			<div class="form-group">
				<label for="InputTambol">Tambol</label>
				<input type="text" class="form-control" id="InputTambol2">
			</div>
			<div class="form-group">
				<label for="InputDistrict">District</label>
				<input type="text" class="form-control" id="InputDistrict2">
			</div>
			<div class="form-group">
				<label for="InputProvince">Province</label>
				<input type="text" class="form-control" id="InputProvince2">
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-8 col-sm-4">
			<button type="button" class="btn btn-default">
				Back
			</button>

			<button type="button" class="btn btn-primary">
				Submit
			</button>
		</div>
	</div>
</div>


@stop