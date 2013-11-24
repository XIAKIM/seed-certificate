@extends('index')
@section('content')
  <h1>Account Verification</h1>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Status</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($descriptions as $description)
            <tr>
              @if($description->status == 0)
                <td><a href="/accountlist/{{ $description->id }}">{{ $description->name }} {{ $description->lastName }}</a></td>
                <td><p class="label label-default">Waiting</p></td>
              @else
                <td>{{ $description->name }} {{ $description->lastName }}</td>
                <td><p class="label label-success">Approved</p></td>
              @endif
            </tr>
          @endforeach
        </tbody>
      </table>
@stop
