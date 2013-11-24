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
      @if($pp1->certificateType == 3 || $pp1->certificateType == 4 || $pp1->certificateType == 5 || $pp1->certificateType == 6 )
  		  <td>PP{{$pp1->certificateType}}</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		    <td>
              <span class="label label-success">{{ Requests::find($pp1->requestID)->status }}</span>
          </td>
        @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp1->requestID)->status }}</span>
              <span class="label label-info">{{ Requests::find($pp1->requestID)->message }}</span>
          </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp1->requestID)->status }}</span>
          </td>
  		  @endif
      @endif
    </tr>
    @endforeach

  @foreach($pp2s as $pp2)
    <tr>
        <td>PP2</td>
        @if(Requests::find($pp2->requestID)->status == 'Approved')
          <td>
              <span class="label label-success">{{ Requests::find($pp2->requestID)->status }}</span>
          </td>
        @elseif(Requests::find($pp2->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp2->requestID)->status }}</span>
              <span class="label label-info">{{ Requests::find($pp2->requestID)->message }}</span>
          </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp2->requestID)->status }}</span>
          </td>
        @endif
    </tr>
  @endforeach

</table>

@stop