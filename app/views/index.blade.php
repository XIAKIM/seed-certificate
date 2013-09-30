<!DOCTYPE html>
<html>
<head>
	<title>Seed Certificate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- header -->
	<header>
		<h1>This is HEADER.</h1>
		<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Test Login</a>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        				<h4 class="modal-title">Modal title</h4>
      				</div>
      				<div class="modal-body">
        				{{ Form::open(["route"       => "/login"]) }}
        					{{ Form::label("username", "Username") }}
        					{{ Form::text("username", Input::get("username")) }}
        					{{ Form::label("password", "Password") }}
        					{{ Form::password("password") }}
        					@if ($error = $errors->first("password"))
            					<div class="error">
                					{{ $error }}
            					</div>
        					@endif
        					{{ Form::submit("login") }}
    					{{ Form::close() }}
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        				<button type="button" class="btn btn-primary">Save changes</button>
      				</div>
    			</div><!-- /.modal-content -->
  			</div><!-- /.modal-dialog -->
		</div>
	</header>	
	<!-- end header -->


	<!-- content -->
	<div class="container">
		@yield('content')
	</div>
	<!-- end content -->


	<!-- footer -->
	<footer>
		<h2>This is FOOTER.</h2>
	</footer>
	<!-- end footer -->


	<!-- javascript library -->
	<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>