<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Near</title>
		
		<?php
			include("template.php");
		?>
		
	</head>
	<body>
		
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					
					<!-- Toggle -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- /Toggle -->
					
					<!-- Brand -->
					<a class="navbar-brand" href="index.php">Near</a>
					<!-- /Brand -->
					
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					
					<!-- Left Links -->
					<ul class="nav navbar-nav">
						<li><a href="collection.php">Collection</a></li>
						<li><a href="discover.php"  >Discover</a  ></li>
					</ul>
					<!-- /Left Links -->
					
					<!-- Right Links -->
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
					<!-- /Right Links -->
					
				</div>
			</div>
		</nav>
		<!-- /Navigation -->
		
		<!-- Jumbotron -->
		<div class="jumbotron">
			<div class="container">
				<h1>One place for all your music.</h1>
				<p>Consolidate your music libraries with Near. Simply link SoundCloud, Spotify, YouTube, or other tracks to Near to keep all your audio in one convenient location. Give Near a try today! It's <b>free</b>.</p>
				<p><a class="btn btn-success btn-lg" href="collection.php" role="button">Get Started &raquo;</a></p>
			</div>
		</div>
		<!-- /Jumbotron -->
		
		<!-- Container -->
		<div class="container">
			
			<!-- Details -->
			<div class="row">
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> Simple</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Accurate</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
				</div>
				<div class="col-md-4">
					<h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Free</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<p><a class="btn btn-default" href="#" role="button">Learn More &raquo;</a></p>
				</div>
			</div>
			<br>
			<!-- /Details -->
			
			<!-- Screenshot -->
			<div class="well">
				<img src="images/screenshot.png" width="100%">
			</div>
			
			<!-- /Screenshot -->
			
			<!-- Details -->
			<div class="row">
				<div class="col-md-3">
					<h3>Compatible</h3>
					<p>Near works with nearly every music streaming service. All you need is a track link to add your music to Near. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec sed odio dui. Donec sed odio dui.</p>
				</div>
				<div class="col-md-3">
					<h3>Accurate</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
				</div>
				<div class="col-md-3">
					<h3>Free</h3>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				</div>
				<div class="col-md-3">
					<h3>Free</h3>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				</div>
			</div>
			<!-- /Details -->
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
			<!-- /Footer -->
			
		</div>
		<!-- /Container -->
		
	</body>
</html>