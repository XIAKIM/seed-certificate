@extends('index')
@section('content')
<div class = "container">
	<h1>Seed Verification</h1>
	<br>
	<h2>{{ Description::find(User::find($documents[0]->userID)->descriptionID)->name }} {{ Description::find(User::find($documents[0]->userID)->descriptionID)->lastName }} request list</h2>
	<table class="table">
		<tr>
			<th>Type</th>
			<th>Status</th>	
			<th>Comment</th>
		</tr>
		@if(count($documents) != 0)
			@foreach($documents as $document)
				<tr>
					
					@if($document->certificateType == 3 || $document->certificateType == 4 || $document->certificateType == 5 || $document->certificateType == 6)
						<td><a href="/requestlist/pp1/information/{{ $document->id }}">pp{{ $document->certificateType }}</a></td>
					@elseif($document->certificateType == 'rm4')
						<td><a href="/requestlist/rm3/information/{{ $document->id }}">rm3</a></td>
					@else
						<td><a href="/requestlist/pp{{$document->certificateType}}/information/{{ $document->id }}">pp{{ $document->certificateType }}</a></td>
					@endif
					@if( Requests::find($document->requestID)->status == "Approved")
						<td>
							<span class="label label-success">{{ Requests::find($document->requestID)->status }}</span>
						</td>
						<td></td>

					@elseif(Requests::find($document->requestID)->status == "Denied")
						<td>
							<span class="label label-danger">{{ Requests::find($document->requestID)->status }} </span>
						</td>
						<td>
							<span class="label label-warning">{{ Requests::find($document->requestID)->message }} </span>
						</td>
					@elseif(Requests::find($document->requestID)->status == "Waiting" || Requests::find($document->requestID)->status == "Waiting for PP8 Request" || Requests::find($document->requestID)->status == "Waiting for PP9 Request")
						<td>
							<span class="label label-default">{{ Requests::find($document->requestID)->status }}</span>
						</td>
						<td></td>
					@endif
				</tr>
			@endforeach
		@endif
	</table>
</div>
@stop
