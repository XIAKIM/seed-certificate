@extends('index')
@section('content')
<div class="page-header">
	<title>Sign Up</title>
</div>
<form role="form">
	<div class="bs-docs-grid">
		<div class="row">
			<div class="col-md-1">Name :  </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Username"></div>
			<div class="col-md-1">Age : </div>
			<div class="col-md-2"><input type="text" class="form-control" placeholder="age"></div>
			<div class="col-md-2">Nationality : </div>
			<div class="col-md-2"><input type="text" class="form-control" placeholder="Nationality"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-2">Identification Type : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Identification Type "></div>
			<div class="col-md-2"> Identification Number: </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Nationality Number"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">Issued District : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Issued District"></div>
			<div class="col-md-2">Issued Province : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Issued Province'"></div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-1">Address: </div>
			<div class="col-md-9"><textarea class="form-control" rows="3"></textarea></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">Tel Number : </div>
			<div class="col-md-3"><input type="text" class="form-control" placeholder='Tel Number'></div>
			<div class='col-md-1'>Email :</div>
			<div class='col-md-3'><input type="text" class="form-control" placeholder='Email'></div>
		</div>
		<input class="btn btn-default" type="submit" value="Submit">
		<input class="btn btn-default" type="reset" value="Reset">
	</div>

</form>
@stop