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
            <td>Source</td>
            <td>{{ $pp8->source }}</td>
          </tr>
          <tr>
            <td>Amount</td>
            <td>{{ $pp8->amount }}</td>
          </tr>
        </tbody>
      </table>


<div class="btn-group">

	<button type="button" class="btn btn-default">Verify</button>
	<button data-toggle="modal" href="#vertifyPP8" type="button" class="btn btn-default">Deny</button>
	<!-- Modal -->
	<div class="modal fade" id="vertifyPP8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
	   <!--  <div class="modal-header">-->  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
   				<br>
			   	<h4 class="modal-title">Comment :</h4>
   <!-- </div> -->
				<div class="modal-body">
					<textarea rows='5' cols="85"></textarea>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Submit</button>
			   	</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>

@stop
