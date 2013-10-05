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
              <td><a href="/verificationAccount/{{ $description->id }}">{{ $description->name }} {{ $description->lastName }}</a></td>
              <td>Waiting</td>
            </tr>
          @endforeach
        </tbody>
      </table>
@stop