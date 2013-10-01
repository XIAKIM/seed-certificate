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
		<!-- Menu (navbar) -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">XIAKIM</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Detail</a>
						</li>
						<li>
							<a href="#">Contact us</a>
						</li>

					</ul>
					
					<form class="navbar-form navbar-left navbar-right">
						<!-- Button trigger modal -->
						<a data-toggle="modal" href="#myModal" class="btn btn-default navbar-btn">Sign in/up</a>

					</form>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Sign in</h4>
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
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Sign in
						</button>
						<button href="localhost:8000/signup" class="btn btn-default">
							Sign up?
						</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

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
	<script type="text/javascript" src="js/tablejs"></script>
</body>
</html>
