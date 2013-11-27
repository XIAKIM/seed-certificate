@extends('index')
@section('content')
	<h1>Substitute Request</h1>
	<!-- <form> -->
	<hr>


	
	<!-- dont change route please change and created function it -->
		{{ Form::open(["route" => "/saverequestpp11", "role" => "form" , "class"=>"form-horizontal"]) }}
				<h3>New company name</h3>
				<br>
				<div class='row'>
					<div class='col-md-8'>	{{ Form::text("companyName", null, ["class" => "form-control"]) }}</div>
				</div>	
				<h3>Reason for substitute</h3>
				<br>
				<div class='row'>
					<div class='col-md-8'>	{{ Form::textarea("reason", null, ["class" => "form-control" ,"row" =>"3"  ]) }}</div>
				</div>	
				<br>
				<div class = "row">
					<div class="col-md-1">{{ Form::button("Back", ["class"=>"btn btn-default " ]) }}</div>
				<div class="col-md-1">{{ Form::submit("Send Reason", ["class"=>"btn btn-default " , "style" => "display: block;"]) }}</div>


				</div>
				<br>

    	{{ Form::close() }}
	<!-- </form> -->
@stop