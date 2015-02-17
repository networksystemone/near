<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--<link rel="icon" href="../../favicon.ico">-->
		
		<title>Discover - Near</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
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
						<li class="active"><a href="discover.php">Discover</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signin.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
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
			
			<h1 class="text-center">&middot; Discover &middot;</h1>
			
			<br>
			<!-- Single button -->
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Trending <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Trending</a></li>
					<li><a href="#">Recommendations</a></li>
					<li class="divider"></li>
					<li><a href="#">Country</a></li>
					<li><a href="#">Electronic</a></li>
					<li><a href="#">Hip-Hop/Rap</a></li>
					<li><a href="#">House</a></li>
					<li><a href="#">Rock</a></li>
				</ul>
			</div>
			
			<br>
			
			<br>
			
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Discover</li>
			</ol>

			<hr>

			<footer>
				<p>&copy; 2015 Figure Inc.</p>
			</footer>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>