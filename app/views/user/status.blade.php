@extends('index')
@section('content')

<div class="page-header">
  <h1>Certificate List</h1>
</div>

<table class="table">
  <tr>
  		<th>Certificate Type</th>
  		<th>Status</th>
  </tr>

  @foreach($pp1s as $pp1)
  <tr>
      @if($pp1->certificateType == 3)
  		  <td>PP3</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		  	<td><a href="/certificate/pp3">{{ Requests::find($pp1->requestID)->status }}</a></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</td>
        @else
          <td>{{ Requests::find($pp1->requestID)->status }}</td>
  		  @endif
  	  @endif
  </tr>
  @endforeach

  @foreach($pp1s as $pp1)
  <tr>
      @if($pp1->certificateType == 4)
  		  <td>PP4</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		  	<td><a href="/certificate/pp4">{{ Requests::find($pp1->requestID)->status }}</a></td>
        @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</td>
  		  @else
  		  	<td>{{ Requests::find($pp1->requestID)->status }}</td>
  		  @endif
  	  @endif
  </tr>
  @endforeach

  @foreach($pp1s as $pp1)
  <tr>
      @if($pp1->certificateType == 5)
  		  <td>PP5</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		  	<td><a href="/certificate/pp5">{{ Requests::find($pp1->requestID)->status }}</a></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</td>
        @else
          <td>{{ Requests::find($pp1->requestID)->status }}</td>
  		  @endif
  	  @endif
  </tr>
  @endforeach

  @foreach($pp1s as $pp1)
  <tr>
      @if($pp1->certificateType == 6)
  		  <td>PP6</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		  	<td><a href="/certificate/pp6">{{ Requests::find($pp1->requestID)->status }}</a></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</td>
        @else
          <td>{{ Requests::find($pp1->requestID)->status }}</td>
  		  @endif
  	  @endif
  </tr>
  @endforeach
</table>

@stop