@extends('index')
@section('content')

<div class="page-header">
	<h1>Request for Import List (PP8)</h1>
</div>

<table class="table table-bordered">
        <thead>
          <tr>
            <th>Field</th>
            <th>Request Form</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Species Type</td>
            <td>{{ $pp8->speciesType }}</td>
          </tr>
          <tr>
            <td>Species Name</td>
            <td>{{ $pp8->speciesName }}</td>
          </tr>
          <tr>
            <td>Scientific Name</td>
            <td>{{ $pp8->scientificName }}</td>
          </tr>
          <tr>
            <td>Unit</td>
            <td>{{ $pp8->unit }}</td>
          </tr>
          <tr>
            <td>Departure Country</td>
            <td>{{ $pp8->departureCountry }}</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>{{ $pp8->amount }}</td>
          </tr>
        </tbody>
      </table>

  <div class="row">
      <div class="col-md-12">
        @if(Requests::find($pp9->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["PP9Controller@createCertificatePP9", $pp9->id]]) }}
              {{ Form::submit('Verify', ["class" => "btn btn-success"])}}
          {{ Form::close() }}
        <button data-toggle="modal" href="#denySignup" type="button" class="btn btn-danger">Deny</button>
          <!-- Modal -->
          <div class="modal fade" id="denySignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
               <!--  <div class="modal-header">
                 -->  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <br>
                  <h4 class="modal-title">Comment :</h4>
                <!-- </div> -->
                <div class="modal-body">
                    {{ Form::open(["action" => ["PP9Controller@denyRequestPP9", $pp9->id]]) }}
                      {{ Form::textarea('comment', null, ["rows" => "5", "cols" => "80"]) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      {{ Form::submit('Submit', ["class" => "btn btn-primary"])}}  
                  {{ Form::close() }}

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        @endif
      </div>
    </div>
@stop