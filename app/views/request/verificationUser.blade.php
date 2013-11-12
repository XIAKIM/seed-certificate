@extends('index')
@section('content')

<div class="page-header">
  <h1>General Information</h1>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" role="form">
			<!-- Name -->
			<div class="row form-group">
				<label class="col-md-2 control-label"> Name : </label>
				<div class='col-md-10'>
					<div class="form-control"> {{ $description->name }}  {{ $description->lastName }} </div>
				</div>	
			</div>

			<!-- Age and Nationality -->			
			<div class="row form-group">
				<label class="col-md-2 control-label"> Age </label>
				<div class="col-md-2">
					<div class="form-control"> {{$description->age}} </div>
				</div>
				
				<label class="col-md-2 control-label"> Nationality </label>
				<div class="col-md-4">
					<div class="form-control"> {{ $description->nationality }} </div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-2 control-label"> Identification Type </label>
				<div class="col-md-2">
					<div class="form-control"> {{ $description->identificationType }}</div>
				</div>
				<label class="col-md-2 control-label"> Identifcation Number </label>
				<div class="col-md-4">
					<div class="form-control"> {{$description->identificationNumber}}</div>
				</div>
			</div>
			

			<!-- Issued District and Issued Province -->	
			<div class="row form-group">
				<label class="col-md-2 control-label"> Issued District </label>
				<div class="col-md-2">
					<div class="form-control"> {{ $description->issuedDistrict }}</div>
				</div>
				<label class="col-md-2 control-label"> Issued Province </label>
				<div class="col-md-4">
					<div class="form-control"> {{$description->issuedProvince}}</div>
				</div>
			</div>		

			<div class="row form-group">
				<label class="col-md-2 control-label"> Address No.  </label>
				<div class="col-md-1">
					<div class="form-control"><p>{{ $description->userAddressNo }}</p></div>
				</div>
				<label class="col-md-1 control-label">Moo </label>
				<div class="col-md-1">
					<div class="form-control"><p>{{ $description->userAddressMoo }}</p></div>
				</div>			
				<label class="col-md-1 control-label">Soi </label>
				<div class="col-md-1">
					<div class="form-control"><p>{{ $description->userAddressSoi }}</p></div>
				</div>

				<label class="col-md-1 control-label">Road </label>
				<div class="col-md-1">
					<div class="form-control"><p>{{ $description->userAddressRoad }}</p></div>
				</div>
			</div>

			<div class="row form-group">
				<label class="col-md-2 control-label">Sub District  </label>
				<div class="col-md-3">
					<div class="form-control"><p>{{ $description->userAddressSubDistrict }}</p></div>
				</div>
				<label class="col-md-1 control-label">District </label>
				<div class="col-md-4">
					<div class="form-control"><p>{{ $description->userAddressDistrict }}</p></div>
				</div>
			</div>

			<div class="row form-group">
				<label class="col-md-2 control-label">Province </label>
				<div class="col-md-3">
					<div class="form-control"><p>{{ $description->userAddressProvince }}</p></div>
				</div>
				<label class="col-md-1 control-label">PostalCode: </label>
				<div class="col-md-4">
					<div class="form-control"><p>{{ $description->userAddressPostalCode }}</p></div>
				</div>
			</div>
			<div class="row form-group">
				<label class="col-md-2 control-label">Tel Number  </label>
				<div class="col-md-3">
					<div class="form-control">{{ $description->telNumber }}</div>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-body">
		<div class="row form-group">
			<div class="col-sm-offset-8 col-sm-4">
				{{ Form::open(array('action' => array('NewAccountController@approveAccount', $description->id)),["class"=>"form-horizontal"]) }}
					<button data-toggle="modal" href="#denySignup" type="button" class="btn btn-default">Deny</button>
    				{{ Form::submit('Approve', ["class" => "btn btn-primary"])}}
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
  	<!-- Modal -->
  	<div class="modal fade" id="denySignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   		<div class="modal-dialog">
      		<div class="modal-content">
				<div class="panel panel-default">
					<div class="panel-body">
						<!--  <div class="modal-header"> --> 
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          				<br>
          				<h4 class="modal-title">Comment :</h4>
        				<!-- </div> -->
        				<div class="modal-body">
          					{{ Form::open(array('action' => array('NewAccountController@denyAccount', $description->id))) }}
            					{{ Form::textarea('comment', null, ["rows" => "5", "cols" => "80"]) }}
        				</div>
        				<div class="modal-footer">
            				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            					{{ Form::submit('Submit', ["class" => "btn btn-primary"])}}  
          						{{ Form::close() }}
        				</div>
					</div>
				</div>
      		</div><!-- /.modal-content -->
    	</div><!-- /.modal-dialog -->
  	</div><!-- /.modal -->

@stop
