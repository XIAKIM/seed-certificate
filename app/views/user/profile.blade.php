@extends('index')
@section('content')
	@if(Session::has('userID'))
        <h2>{{ Session::get('userID') }}</h2>
	@endif
		<img src="" alt="" class="img-thumbnail">
	<table class="table">
		<tr>
			<td>Name</td>
			<td></td>
		</tr>
		<tr>
			<td>Age</td>
			<td></td>
		</tr>
		<tr>
			<td>Nationality</td>
			<td></td>
		</tr>
		<tr>
			<td>Nationality Type</td>
			<td></td>
		</tr>
		<tr>
			<td>Nationality Number</td>
			<td></td>
		</tr>
		<tr>
			<td>Issued District</td>
			<td></td>
		</tr>
		<tr>
			<td>Issued Province'</td>
			<td></td>
		</tr>
		<tr>
			<td>Address</td>
			<td></td>
		</tr>
		<tr>
			<td>Tel Number</td>
			<td></td>
		</tr>
	</table>
@stop