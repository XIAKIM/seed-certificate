@extends('index')
@section('content')

<table class="table table-bordered">
        <thead>
          <tr>
            <th>Report Name</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Total Number of Request</td>
            <td><a href="/report1">Report</a></td>
          </tr>
          <tr>
            <td>Number of denied / Approve Request per year</td>
            <td><a href="/report2">Report</a></td>
          </tr>
          <tr>
            <td>Total number of seed come in check point (kg.)</td>
            <td><a href="/report3">Report</a></td>
          </tr>
          <tr>
            <td>Total approve/deny RM3 per year</td>
            <td><a href="/report4">Report</a></td>
          </tr>
          <tr>
            <td>Total approved / denied user per year</td>
            <td><a href="/report5">Report</a></td>
          </tr>
        </tbody>
      </table>

@stop