@extends('index')
@section('content')
	<h1>Substitute Request</h1>
	<!-- <form> -->
	<hr>


	<h3>Reason for substitute</h3>
	<br>
	<!-- dont change route please change and created function it -->
		{{ Form::open(["route" => "/createPP1Request", "role" => "form" , "class"=>"form-horizontal"]) }}
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