@extends('index')
@section('content')

<div class="page-header">
  <h1>Certificate List</h1>
</div>

<table class="table">
  <tr>
  		<th>Certificate Type</th>
  		<th>Status</th>
		<th>Comment</th>
  </tr>
    @foreach($pp1s as $pp1)
    <tr>
      @if($pp1->certificateType == 3 || $pp1->certificateType == 4 || $pp1->certificateType == 5 || $pp1->certificateType == 6 )
  		  <td>PP{{$pp1->certificateType}}</td>
  		  @if(Requests::find($pp1->requestID)->status == 'Approved')
  		  <td>
              <span class="label label-success">{{ Requests::find($pp1->requestID)->status }}</span>
          </td>
		  <td></td>
        @elseif(Requests::find($pp1->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp1->requestID)->status }}</span>
          </td>
		  <td>
              <span class="label label-warning">{{ Requests::find($pp1->requestID)->message }}</span>
		  </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp1->requestID)->status }}</span>
          </td>
		  <td></td>
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
		  <td></td>
        @elseif(Requests::find($pp2->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp2->requestID)->status }}</span>
          </td>
		  <td>
              <span class="label label-warning">{{ Requests::find($pp2->requestID)->message }}</span>
		  </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp2->requestID)->status }}</span>
          </td>
		  <td></td>
        @endif
    </tr>
  @endforeach

  @foreach($pp10s as $pp10)
    <tr>
        <td>PP10</td>
        @if(Requests::find($pp10->requestID)->status == 'Approved')
          <td>
              <span class="label label-success">{{ Requests::find($pp10->requestID)->status }}</span>
          </td>
      <td></td>
        @elseif(Requests::find($pp10->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp10->requestID)->status }}</span>
          </td>
      <td>
              <span class="label label-warning">{{ Requests::find($pp10->requestID)->message }}</span>
      </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp10->requestID)->status }}</span>
          </td>
      <td></td>
        @endif
    </tr>
  @endforeach

  @foreach($pp11s as $pp11)
    <tr>
        <td>PP11</td>
        @if(Requests::find($pp11->requestID)->status == 'Approved')
          <td>
              <span class="label label-success">{{ Requests::find($pp11->requestID)->status }}</span>
          </td>
      <td></td>
        @elseif(Requests::find($pp11->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp11->requestID)->status }}</span>
          </td>
      <td>
              <span class="label label-warning">{{ Requests::find($pp11->requestID)->message }}</span>
      </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp11->requestID)->status }}</span>
          </td>
      <td></td>
        @endif
    </tr>
  @endforeach

  @foreach($pp12s as $pp12)
    <tr>
        <td>PP2</td>
        @if(Requests::find($pp12->requestID)->status == 'Approved')
          <td>
              <span class="label label-success">{{ Requests::find($pp12->requestID)->status }}</span>
          </td>
      <td></td>
        @elseif(Requests::find($pp12->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($pp12->requestID)->status }}</span>
          </td>
      <td>
              <span class="label label-warning">{{ Requests::find($pp12->requestID)->message }}</span>
      </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($pp12->requestID)->status }}</span>
          </td>
      <td></td>
        @endif
    </tr>
  @endforeach

  @foreach($rm3s as $rm3)
    <tr>
        <td>RM3</td>
        @if(Requests::find($rm3->requestID)->status == 'Approved')
          <td>
              <span class="label label-success">{{ Requests::find($rm3->requestID)->status }}</span>
          </td>
      <td></td>
        @elseif(Requests::find($rm3->requestID)->status == 'Denied')
          <td>
              <span class="label label-danger">{{ Requests::find($rm3->requestID)->status }}</span>
          </td>
      <td>
              <span class="label label-warning">{{ Requests::find($rm3->requestID)->message }}</span>
      </td>
        @else
          <td>
              <span class="label label-default">{{ Requests::find($rm3->requestID)->status }}</span>
          </td>
      <td></td>
        @endif
    </tr>
  @endforeach

</table>

@stop
