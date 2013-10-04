@extends('index')
@section('content')
<<<<<<< HEAD
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

=======
<div class="page-header">
	<title>Sign Up</title>
</div>
<form role="form">
	<div class="bs-docs-grid">
		<div class="row">
			<div class="col-md-1">Name :  </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Username"></div>
			<div class="col-md-1">Age : </div>
			<div class="col-md-2"><input type="text" class="form-control" placeholder="age"></div>
			<div class="col-md-2">Nationality : </div>
			<div class="col-md-2"><input type="text" class="form-control" placeholder="Nationality"></div>
		</div>
		<br>

		<div class="row">
			<div class="col-md-2">Identification Type : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Identification Type "></div>
			<div class="col-md-2"> Identification Number: </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Nationality Number"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">Issued District : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Issued District"></div>
			<div class="col-md-2">Issued Province : </div>
			<div class="col-md-4"><input type="text" class="form-control" placeholder="Issued Province'"></div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-1">Address: </div>
			<div class="col-md-9"><textarea class="form-control" rows="3"></textarea></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">Tel Number : </div>
			<div class="col-md-3"><input type="text" class="form-control" placeholder='Tel Number'></div>
			<div class='col-md-1'>Email :</div>
			<div class='col-md-3'><input type="text" class="form-control" placeholder='Email'></div>
		</div>
		<input class="btn btn-default" type="submit" value="Submit">
		<input class="btn btn-default" type="reset" value="Reset">
	</div>

</form>
@stop
>>>>>>> 3f833bf063986d1ced4d0618cbec97f208ddeddd
