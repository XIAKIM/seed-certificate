@extends('index')
@section('content')
<div class="page-header">
	<h1>Sign UP!!! </h1>
</div>



<form id='signup'>
	<div class="input-group">
		<span class="input-group-addon">Name       </span>
		<input type="text" class="form-control" placeholder="Username">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Age</span>
		<input type="text" class="form-control" placeholder="age">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Nationality</span>
		<input type="text" class="form-control" placeholder="Nationality">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Nationality Type</span>
		<input type="text" class="form-control" placeholder="Nationality Type">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Nationality Number</span>
		<input type="text" class="form-control" placeholder="Nationality Number">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Issued District</span>
		<input type="text" class="form-control" placeholder="Issued District">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Issued Province'</span>
		<input type="text" class="form-control" placeholder="Issued Province'">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Address</span>
		<input type="text" class="form-control" placeholder="Address">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Tel Number</span>
		<input type="text" class="form-control" placeholder='Tel Number'>
	</div>
	<button type="submit" class="btn btn-default">Sign in</button>
</form>
	@stop