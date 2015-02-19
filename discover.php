<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Discover - Near</title>
		
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
						<li class="active"><a href="discover.php">Discover</a></li>
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
		
		<!-- Content -->
		<div class="container">
			
			<!-- Title -->
			<h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Discover <small>Find the hottest tracks and personalized recommendations.</small></h1>
			<br>
			
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Trending <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li class="active"><a href="">Trending</a></li>
					<script>if (Parse.User.current()) document.write('<li><a href="?s=recommendations">Recommendations</a></li>');</script>
					<li class="divider"></li>
					<li><a href="?s=alternativerock">Alternative Rock</a></li>
					<li><a href="?s=danceedm">Dance & EDM</a></li>
					<li><a href="?s=dubstep">Dubstep</a></li>
					<li><a href="?s=hiphoprap">Hip-Hop & Rap</a></li>
					<li><a href="?s=house">House</a></li>
					<li><a href="?s=indie">Indie</a></li>
					<li><a href="?s=metal">Metal</a></li>
					<li><a href="?s=pop">Pop</a></li>
					<li><a href="?s=rbsoul">R&B & Soul</a></li>
					<li><a href="?s=reggae">Reggae</a></li>
					<li><a href="?s=rock">Rock</a></li>
				</ul>
			</div>
			<br>
			
			<div class="row">
				<div class="col-md-9">
					
					
					<hr>
					<div class="row">
						<div class="col-md-9">
							<h4><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> Throw Sum Mo (feat. Nicki Minaj & Young Thug) <small>Rae Sremmurd</small></h4>
						</div>
						<div class="col-md-3">
							<p class="text-right"><small><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 8,929 &nbsp; <span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> 4,980 &nbsp; <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 719</small></p>
						</div>
					</div>
					
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/181305899&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					
					<hr>
					<h4><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> CoCo <small>O.T. Genasis</small></h4>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:2JI71GHwq2LN8mtq3iCLYo" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<hr>
					<h4><span style="color: orange;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: orange;">Hot</span> I Don't Mind (feat. Juicy J) <small>Usher</small></h4>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/170339902&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					<hr>
					<h4>No Role Modelz <small>J. Cole</small></h4>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:62vpWI1CHwFy7tMIcSStl8" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<hr>
					
					<nav>
						<ul class="pager">
							<li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>
							<li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
					</nav>
					
				</div>
				<div class="col-md-3">
					<input id="name" type="text" class="form-control" placeholder="Search">
					
					<br>
					
					<h4>Who to Follow</h4>
					
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="follow/kendrick.png">
							</a>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Kendrick Lamar <span style="color: red;" class="glyphicon glyphicon-certificate" aria-hidden="true"></span></h4>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 892,672
						</div>
					</div>
					
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="follow/cole.png">
							</a>
						</div>
						<div class="media-body">
							<h5 class="media-heading">J. Cole <span style="color: red;" class="glyphicon glyphicon-certificate" aria-hidden="true"></span></h4>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 152,124
						</div>
					</div>
					
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="follow/ab.png">
							</a>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Ab-Soul <span style="color: red;" class="glyphicon glyphicon-certificate" aria-hidden="true"></span></h4>
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 142,124
						</div>
					</div>
					
					<div class="media">
						<div class="media-left">
							<a href="#">
								<img class="media-object" src="follow/childish.png">
							</a>
						</div>
						<div class="media-body">
							<h5 class="media-heading">Childish Gambino <span style="color: red;" class="glyphicon glyphicon-certificate" aria-hidden="true"></span></h4>
							<spanclass="glyphicon glyphicon-user" aria-hidden="true"></span> 202,124
						</div>
					</div>
					<br>
					<div class="well" style="height: 243px;"></div>
				</div>
			</div>
			
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Discover</li>
			</ol>
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>