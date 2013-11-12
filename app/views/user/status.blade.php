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
  		  	<td><p style="color: green">{{ Requests::find($pp1->requestID)->status }}</p></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td><p style="color: red">{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</p></td>
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
  		  	<td><p style="color: green">{{ Requests::find($pp1->requestID)->status }}</p></td>
        @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td><p style="color: red">{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</p></td>
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
  		  	<td><p style="color: green">{{ Requests::find($pp1->requestID)->status }}</p></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td><p style="color: red">{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</p></td>
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
  		  	<td><p style="color: green">{{ Requests::find($pp1->requestID)->status }}</p></td>
  		  @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td><p style="color: red">{{ Requests::find($pp1->requestID)->status }} ({{ Requests::find($pp1->requestID)->message }})</p></td>
        @else
          <td>{{ Requests::find($pp1->requestID)->status }}</td>
  		  @endif
  	  @endif
  </tr>
  @endforeach
</table>

@stop