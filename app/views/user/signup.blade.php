@extends('index')
@section('content')
	<div class="page-header">
		<h1>Register for new user</h1>
	</div>
	{{ Form::open(["route" => "/create", "class" => "form-horizontal"]) }}
		<div class="form-group">
        	<label for="usernameLabel" class="col-lg-2 control-label">Username</label>
        	<div class="col-lg-8">
        		{{ Form::text("username", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="passwordLabel" class="col-lg-2 control-label">Password</label>
        	<div class="col-lg-8">
        		{{ Form::password("password", ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="confirmPasswordLabel" class="col-lg-2 control-label">Confirm Password</label>
        	<div class="col-lg-8">
        		{{ Form::password("password2", ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="emailLabel" class="col-lg-2 control-label">Email</label>
        	<div class="col-lg-8">
        		{{ Form::email("email", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="firstnameLabel" class="col-lg-2 control-label">First Name</label>
        	<div class="col-lg-8">
        		{{ Form::text("name", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Last Name</label>
        	<div class="col-lg-8">
        		{{ Form::text("lastname", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("nationality", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>
    {{ Form::close() }}
@stop

