@extends('index')
@section('content')


		<div class="starter-template">
			<h1>Hello, Mr. {{ $description->name }} {{ $description->lastName }}</h1>		
			<br></br>
			<p>
				There are currently {{ Requests::where('status', '=', 'Waiting')->count() }} request verification pending.
				<br><br>
				To verify them, click on the "Verify" button.
				<br><br><br><br>
				<a href="/verification" class="btn btn-primary btn-lg">Verify</a>
				<br><br>				
			</p>
		</div>

@stop