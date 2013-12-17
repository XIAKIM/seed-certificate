@extends('index')
@section('content')

<table class="table table-bordered">
        <thead>
          <tr>
            <th>Certificate Number</th>
            <th>Print Report</th>
          </tr>
        </thead>
        <tbody>
          @foreach($documents as $document)
          <tr>
            <td>{{ $document->id }}</td>
            <td><a href="/signature/pp{{ $document->certificateType }}/{{ $document->id }}">{{ $document->requestType }}</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

@stop