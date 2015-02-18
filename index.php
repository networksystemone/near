<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Near</title>
		
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Parse -->
		<script src="//www.parsecdn.com/js/parse-1.3.4.min.js"></script>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<style>
			body {
				padding-top: 50px;
			}
		</style>
		
	</head>
	<body>
		
		<!-- Navigation -->
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
						<script>
							Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
							
							if (!Parse.User.current()) {
								document.write('<li><a href="signin.php">Sign In</a></li>');
								document.write('<li><a href="signup.php">Sign Up</a></li>');
							} else {
								document.write('<li><a href="account.php">'+ Parse.User.current().get("name") + '</a></li>');
							}
						</script>
							
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
		
		<!-- Jumbotron -->
		<div class="jumbotron">
			<div class="container">
				<h1>Once place for all your music.</h1>
				<p>Consolidate your music libraries with Near. Simply link SoundCloud, Spotify, YouTube, or other tracks to Near to keep all your audio in one convenient location.</p>
				<p><a class="btn btn-success btn-lg" href="collection.php" role="button">Get started &raquo;</a></p>
			</div>
		</div>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Details -->
			<div class="row">
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> Simple</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Accurate</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Free</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
			</div>
			<br>
		</div>
			
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="drake-2.jpeg">
					<div class="carousel-caption">
						<h3>Drake Is Getting "Rich Off A Mixtape" for the Second Time</h3>
						<p>If You're Reading This It's Too Late is even breaking Spotify records.</p>
					</div>
				</div>
				<div class="item">
					<img src="tyga.jpeg">
					<div class="carousel-caption">
						<h3>Chris Brown and Tyga Hope You "Remember" This New Single</h3>
						<p>Listen to "Remember Me" as you prep for Fan Of A Fan 2.</p>
					</div>
				</div>
				<div class="item">
					<img src="drake-2.jpeg">
					<div class="carousel-caption">
						<h3>Drake Is Getting "Rich Off A Mixtape" for the Second Time</h3>
						<p>If You're Reading This It's Too Late is even breaking Spotify records.</p>
					</div>
				</div>
				<div class="item">
					<img src="tyga.jpeg">
					<div class="carousel-caption">
						<h3>Chris Brown and Tyga Hope You "Remember" This New Single</h3>
						<p>Listen to "Remember Me" as you prep for Fan Of A Fan 2.</p>
					</div>
				</div>
			</div>
			
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		
		
		<br>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Details -->
			<div class="row">
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> Simple</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Accurate</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Free</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default" href="#" role="button">Learn more &raquo;</a></p>
				</div>
			</div>
			<br>
		</div>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li class="active">Home</li>
			</ol>
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>