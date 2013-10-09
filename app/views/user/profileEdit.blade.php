@extends('index')
@section('content')

<div class="starter-template">
	<h1>Create a new password</h1>
	<br></br>
	<!-- <form class="form-horizontal" role="form"> -->
	{{ Form::open(["route" => "/edit", "class" => "form-horizontal", "role"=>"form"]) }}
	<div class="form-group">
		<label for="inputOldPassword" class="col-lg-2 control-label">Old Password</label>
		<div class="col-lg-10">
			<!-- <input type="password" class="form-control" id="inputOldPassword" placeholder="Password"> -->
			{{ Form::password("passwordOld", ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputNewPassword1" class="col-lg-2 control-label">New Password</label>
		<div class="col-lg-10">
			<!-- <input type="password" class="form-control" id="inputNewPassword1" placeholder="Password"> -->
			{{ Form::password("password1", ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputNewPassword2" class="col-lg-2 control-label">Corfirm New Password</label>
		<div class="col-lg-10">
			<!-- <input type="password" class="form-control" id="inputNewPassword2" placeholder="Password"> -->
			{{ Form::password("password2", ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-offset-2 col-lg-10">
			{{ Form::submit("Submit", ["class" => "btn btn-primary btn-large"])}}
			<button type="reset" class="btn btn-default btn-large" value="Reset">Reset</button>
		</div>
	</div>
	<!-- </form> -->
	{{ Form::close() }}
</div>

@stop