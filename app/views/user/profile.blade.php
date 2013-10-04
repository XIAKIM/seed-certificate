@extends('index')
@section('content')
@if(Session::has('userID'))
<h2>{{ Session::get('userID') }}</h2>
@endif

<img src="" alt="" class="img-thumbnail">
<div class="bs-docs-grid">
	<div class="row">
		<div class='col-md-1'>User :</div>
		<div class='col-md-2'></div>
	</div>

	<div class="row">
		<div class='col-md-1'>Password:</div>
		<div class='col-md-2'></div>
	</div>

	<div class="row">
		<div class="col-md-1">Name :  </div>
		<div class="col-md-4"></div>
		<div class="col-md-1">Age : </div>
		<div class="col-md-2"></div>
		<div class="col-md-2">Nationality : </div>
		<div class="col-md-2"></div>
	</div>

	<div class="row">
		<div class="col-md-2">Identification Type : </div>
		<div class="col-md-4"></div>
		<div class="col-md-3"> Identification Number: </div>
		<div class="col-md-4"></div>
	</div>

	<div class="row">
		<div class="col-md-2">Issued District : </div>
		<div class="col-md-4"></div>
		<div class="col-md-2">Issued Province : </div>
		<div class="col-md-4"></div>
	</div>


	<div class="row">
		<div class="col-md-1">Address: </div>
		<div class="col-md-9"><p></p></div>
	</div>

	<div class="row">
		<div class="col-md-2">Tel Number : </div>
		<div class="col-md-3"></div>
	</div>

	<button type="button" class="btn btn-default">Edit</button>
</div>

@stop