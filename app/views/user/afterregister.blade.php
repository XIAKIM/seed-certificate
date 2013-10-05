@extends('index')
@section('content')
	@if(Session::has('error'))
		<h1 style="color: red">Register error, all field are required</h1>
	@else
		<h1 style="color: blue">Register completed please identify information at Seed government office</h1>
	@endif
@stop
