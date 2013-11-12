@extends('index')
@section('content')
<h1>Relocation Request</h1>
<!-- <form> -->
<hr>

<h3> New Location information</h3>
<br>


<!-- dont change route please change and created function it -->

{{ Form::open(["route" => "/createPP1Request", "role" => "form" , "class"=>"form-horizontal"]) }}




<div class="row">
	<div class='col-md-1'>Address</div>
	<div class='col-md-3'>{{ Form::text("addressNo", null, ["class" => "form-control"   ]) }}</div>
	<div class='col-md-1'>Moo </div>
	<div class='col-md-3'>{{ Form::text("moo", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
	<div class='col-md-1'>Soi </div>
	<div class='col-md-3'>{{ Form::text("soi", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
</div>
<br>

<div class="row">
		<div class='col-md-1'>Road</div>
		<div class='col-md-3'>{{ Form::text("road", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
	<div class='col-md-1'>Tambol </div>
	<div class='col-md-3'>{{ Form::text("tambol", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
	<div class='col-md-1'>District</div>
	<div class='col-md-3'>{{ Form::text("district", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
</div>
<br>
<div class="row">
	<div class='col-md-1'>Province</div>
	<div class='col-md-3'>{{ Form::text("province", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
	<div class='col-md-1'>Post Code </div>
	<div class='col-md-3'>{{ Form::text("postcode", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
	<div class='col-md-1'>phone </div>
	<div class='col-md-3'>{{ Form::text("phone", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
</div>
<hr>
<h3>Reason for Relocation</h3>
<br>

<div class='row'>
	<div class='col-md-8'>	{{ Form::textarea("reason", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
</div>	
<br>
<div class = "row">
	<div class="col-md-1">{{ Form::button("Back", ["class"=>"btn btn-default " ]) }}</div>
	<div class="col-md-1">{{ Form::submit("Send Reason", ["class"=>"btn btn-default " , "style" => "display: block;"]) }}</div>

</div>
{{ Form::close() }}
<br>
<!-- </form> -->
@stop