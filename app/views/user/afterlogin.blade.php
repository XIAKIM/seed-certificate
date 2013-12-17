@extends('index')
@section('content')
	<h2 id='Name'> Hello, {{ Description::find(Auth::user()->descriptionID)->name }} {{ Description::find(Auth::user()->descriptionID)->lastName }}</h2>	
	<p>You have {{ Requests::where('status','=','Waiting')->count() }}  request pending.</p>	
	<p>If you want to request for any certification, please click on the "Request" button.</p>	
	<br><a href="/allrequest" class="btn btn-primary btn-lg">Request</a>
@stop
