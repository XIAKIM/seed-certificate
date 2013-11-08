@extends('index')
@section('content')
<div class="page-header">
	<h1>Seed Passing Request</h1>
</div>
{{ Form::open(["route" => "/createPP1Request", "role" => "form" , "class"=>"form-horizontal"]) }}
Seed locatiion before passing 
<br>
<br>
<div class ="row">
	<div class ='col-md-2'></div>
	<div class ='col-md-1'>City </div>
	<div class ='col-md-3'> {{ Form::text("cityBefore", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'>Country</div>
	<div class ='col-md-3'>{{ Form::text("countryBefore", null, ["class" => "form-control"   ]) }}</div>

</div>
<br>
<div class ='row'>
	<div class ='col-md-2'></div>
	<div class= 'col-md-1'>Customer</div>
	<div class ='col-md-3'>{{ Form::text("customerBefore", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'>Vehicle</div>
	<div class = 'col-md-3'>{{ Form::text("vehicleBefore", null, ["class" => "form-control"   ]) }}</div>
</div>

<br>
Seed location after passing 
<br>
<br>
<div class ="row">
	<div class ='col-md-2'></div>
	<div class ='col-md-1'>City </div>
	<div class ='col-md-3'>{{ Form::text("cityAfter", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'>Country</div>
	<div class ='col-md-3'>{{ Form::text("countryAfter", null, ["class" => "form-control"   ]) }}</div>

</div>
<br>
<div class ='row'>
	<div class ='col-md-2'></div>
	<div class= 'col-md-1'>Customer</div>
	<div class ='col-md-3'>{{ Form::text("customerAfter", null, ["class" => "form-control"   ]) }}</div>
	<div class ='col-md-1'>Vehicle</div>
	<div class = 'col-md-3'>{{ Form::text("vehicleAfter", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>

<div class='row'>
	<div class ='col-md-3'>Road that we for transporting</div>
	<div class ='col-md-3'>{{ Form::text("road", null, ["class" => "form-control"   ]) }}</div>
</div>
<br>
<div class ='row'>
	<div class='col-md-5'>Transporting and collecting seed location</div>
</div>
<hr>
<div class='row'>
	<div class= 'col-md-3'>Time duration </div>
	<div class = 'col-md-3'>{{ Form::text("time", null, ["class" => "form-control"   ]) }}</div>
</div>

<div class ='row'>
	<div class = 'col-md-1 col-md-offset-8'>{{ Form::button("Back",  ["class" => "btn btn-default "   ]) }}</div>
	<div class = 'col-md-1'>{{ Form::button("Next",  ["class" => "btn btn-default "   ]) }}</div>
</div>

{{ Form::close() }}

@stop