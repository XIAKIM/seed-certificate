@extends('index')
@section('content')
	
	<div class="page-header">
		<h1>Account Verification</h1>
	</div>

	<div class="container">  

		<div  class="container col-md-12" >
			<img src="profile pic" width="150" height="150" class="img-rounded  col-md-2 col-md-offset-5" >
		</div>
		<br>
		<div class="container col-md-12">
			<div class=row>
				<label class="col-sm-1 col-md-offset-1 control-label" >    Name    </label>
				<span class="col-sm-3"> _______________________________ </span>
				<label class="col-sm-1 control-label" >    Age    </label>
				<span class="col-sm-1"> ___ </span>
				<label class="col-sm-1 control-label" >    Nationality    </label>
				<span class="col-sm-4"> ______________ </span>	
			</div>
			<div class="row">
				<label class="col-sm-2  col-md-offset-1 control-label" >    Identification Type    </label>
				<span class="col-sm-2"> ______________ </span>	
				<label class="col-sm-2 control-label" >    Identification Number    </label>
				<span class="col-sm-2"> ______________ </span>		
			</div>

			<div class="row">
				<label class="col-sm-2  col-md-offset-1 control-label" >    Issue Drict    </label>
				<span class="col-sm-2"> ______________ </span>	
				<label class="col-sm-2 control-label" >    Issue Province    </label>
				<span class="col-sm-2"> ______________ </span>		
			</div>
			<div class="row">
				<label class="col-sm-1  col-md-offset-1 control-label" >    Address    </label>
				<span class="col-sm-10"> ____________________________________________________________________ </span>	
			</div>
			<div class="row">
				<label class="col-sm-2  col-md-offset-1 control-label" >    Telephone Number    </label>
				<span class="col-sm-2"> 08X-XXX-XXXX </span>	
			</div>
			<br>
			<div class="row">
				<div class="container col-sm-9"></div>
				<div class="container col-sm-3">
					<button type="button" class="btn btn-default">Back</button>
					<button type="button" class="btn btn-primary">Approve</button>
					<button type="button" class="btn btn-danger">Deny</button>
				<div></div>
			</div>
		</div>
	</div>
@stop
