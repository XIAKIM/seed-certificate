@extends('index')
@section('content')
<div class = "container">
	<h1>Seed Verification</h1>
	<br>
	<h2>{{ Description::find(User::find($pp1s[0]->userID)->descriptionID)->name }} {{ Description::find(User::find($pp1s[0]->userID)->descriptionID)->lastName }} request list</h2>
	<table class="table">
		<tr>
			<th>Type</th>
			<th>Status</th>	
		</tr>
		@foreach($pp1s as $pp1)
			<tr>
				<!--
				<td><a href="/verificationSeed/pp1/information/{{ $pp1->id }}">พพ{{ $pp1->certificateType }}.</a></td>
				-->
				<td><a href="/requestlist/pp1/information/{{ $pp1->id }}">พพ{{ $pp1->certificateType }}.</a></td>
				<td>{{ Requests::find($pp1->requestID)->status }}</td>
			</tr>
		@endforeach
	</table>
</div>
@stop