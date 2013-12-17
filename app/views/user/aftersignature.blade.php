@extends('index')
@section('content')
	<h2 id='Name'> Hello, {{ Description::find(Auth::user()->descriptionID)->name }} {{ Description::find(Auth::user()->descriptionID)->lastName }}</h2>	
	<p>You have {{ Certificate::all()->count() }}  print pending.</p>	
	<p>If you want to print for any certification, please click on the "Report" button.</p>	
	<br><a href="/signature" class="btn btn-primary btn-lg">Report</a>
@stop
