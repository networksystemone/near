<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Sign In - Near</title>
		
		<?php
			include("template.php");
		?>
		
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
					<a class="navbar-brand" href="index.php">Near</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="collection.php">Collection</a></li>
						<li><a href="discover.php">Discover</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="signin.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#companyModal" data-toggle="modal" data-target="#companyModal">Company</a></li>
								<li class="divider"></li>
								<li><a href="#downloadsModal" data-toggle="modal" data-target="#downloadsModal">Downloads</a></li>
								<li><a href="//figure-near.tumblr.com" target="blank">Blog</a></li>
								<li><a href="#careersModal" data-toggle="modal" data-target="#careersModal">Careers</a></li>
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
			<center>
				<h1>Sign In</h1>
				<br>
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="username" placeholder="Username" autofocus>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="button" class="btn btn-success btn-block" onclick="signIn()">Sign In</button>
						</form>
						<br>
						<span><a href="#">Forgot?</a></span>
						<br><br>
						<span>Don't have an account? <a href="signup.php">Sign Up</a></span>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</center>
			<br>
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<script>
			Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
			
			// Redirect
			if (Parse.User.current()) {
				window.location.replace("index.php");
			} else {
				
				function signIn() {
					Parse.User.logIn(document.getElementById("username").value, document.getElementById("password").value, {
						success: function(user) {
							window.location.replace("collection.php");
						},
						error: function(user, error) {
							alert("Failure");
						}
					});
				}
			}
		</script>
	</body>
</html>