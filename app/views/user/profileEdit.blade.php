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
			{{ Form::text("passwordOld", null, ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputNewPassword1" class="col-lg-2 control-label">New Password</label>
		<div class="col-lg-10">
			<!-- <input type="password" class="form-control" id="inputNewPassword1" placeholder="Password"> -->
			{{ Form::text("password1", null, ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputNewPassword2" class="col-lg-2 control-label">Corfirm New Password</label>
		<div class="col-lg-10">
			<!-- <input type="password" class="form-control" id="inputNewPassword2" placeholder="Password"> -->
			{{ Form::text("password2", null, ["class" => "form-control"]) }}
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
		<div class="col-lg-10">
			<!-- <input type="email" class="form-control" id="inputEmail1" placeholder="Email"> -->
			{{ Form::text("email", null, ["class" => "form-control"]) }}
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