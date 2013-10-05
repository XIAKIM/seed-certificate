@extends('index')
@section('content')
	afterlogin.blade.php
@if(Session::has('userID'))
	<!--   <h2> {{ Session::get('userID') }} </h2>   -->
	<?php  
		//Find user by userID
		$user = User::find(Session::get('userID')) 
	?>
<div class="container">
		<h2 id='Name'> Hello, {{ $user->username}} </h2>	
		<p>You don't have any request pending.</p>	
		<p>If you want to request for any certification, please click on the "Request" button.</p>	
		<br></br>
		<a href="#" class="btn btn-primary btn-lg">Request</a>
</div>
@endif

@stop
