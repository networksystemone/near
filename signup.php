<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Sign Up - Near</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<script src="//www.parsecdn.com/js/parse-1.3.4.min.js"></script>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<style>
			body {
				padding-top: 50px;
			}
		</style>
		
	</head>
	<body>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Near</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="collection.php">Collection</a></li>
						<li><a href="discover.php">Discover</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signin.php">Sign In</a></li>
						<li class="active"><a href="signup.php">Sign Up</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Company</a></li>
								<li class="divider"></li>
								<li><a href="#">Downloads</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Careers</a></li>
								<li class="divider"></li>
								<li><a href="#">Forums</a></li>
								<li><a href="#">Help Center</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			
			<script>
				Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
				
				// Redirect
				if (Parse.User.current()) {
					window.location.replace("index.php");
				} else {
					
					function signUp() {
						
						var user = new Parse.User();
						user.set("name", document.getElementById("name").value);
						user.set("email", document.getElementById("email").value);
						user.set("username", document.getElementById("username").value);
						user.set("password", document.getElementById("password").value);
						
						user.signUp(null, {
							success: function(user) {
								alert("You have successfully signed up. Please check your email to verify your email account.");
								window.location.replace("index.php");
							},
							error: function(user, error) {
								alert("Error: " + error.code + " " + error.message);
							}
						});
					}
				}
			</script>
			
			<center>
				
				<!-- Title -->
				<h1>Sign Up</h1>
				<br>
				
				<p>Near is free and always will be.</p>
				
				<br>
				
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Name" autofocus>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> Agree to Near terms of service
								</label>
							</div>
							<button type="button" class="btn btn-success" onclick="signUp()">Sign Up</button>
						</form>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</center>
			
			<br>
			
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Sign Up</li>
			</ol>

			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc.</p>
			</footer>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>