<!DOCTYPE html>
<html>
<head>
	<title>Seed Certificate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
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
					<a class="navbar-brand" href="/afterlogin">Seed Certificate Application</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="/afterlogin">Home</a>
						</li>
						<li>
							<a href="/getstart">Details</a>
						</li>
						<li>
							<a href="/about">About</a>
						</li>
						<li>
							<a href="/contact">Contact us</a>
						</li>

					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						@if(Auth::guest())
							<!-- Button trigger modal -->
							<a data-toggle="modal" href="#myModal" class="btn btn-default navbar-btn">Sign in/up</a>
						@else
      						<li class="dropdown">
        						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Description::find(Auth::user()->descriptionID)->name }} {{ Description::find(Auth::user()->descriptionID)->lastName }}&nbsp;<b class="caret"></b></a>
        						<ul class="dropdown-menu">
          							<li><a href="/profile"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Profile</a></li>
          							<li><a href="/certificationlist"><span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;&nbsp;Certification Status</a></li>
          							<li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;&nbsp;Logout</a></li>
        						</ul>
      						</li>
						@endif
					</ul>
					

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
        					{{ Form::text("email", Input::get("email")) }}
        					{{ Form::label("password", "Password") }}
        					{{ Form::password("password") }}
        					@if ($error = $errors->first("password"))
            					<div class="error">
                					{{ $error }}
            					</div>
        					@endif
    					{{ Form::submit("Login" , ["class" => "btn btn-default"] ) }}
						{{ Form::close() }}
					</div>
					<div class="modal-footer">
							
						{{  Form::open(["route" => "/signup"]) }}
							{{ Form::submit('Sign Up', ["class" => "btn btn-default"] ) }}
						{{  Form::close() }}
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

	</header>	
	<!-- end header -->


	<!-- content -->
	<div class="container">
			@yield('content')
	
	<!-- end content -->


	<!-- footer -->
		<footer>
        	<hr>
    		<p>XIAKIM 2013</p>
    	</footer>
	<!-- end footer -->

	</div>


	<!-- javascript library -->
	<script type="text/javascript" src="{{URL::asset('js/jquery-2.0.3.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/table.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('js/request.js')}}"></script>
</body>
</html>
