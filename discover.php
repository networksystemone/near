<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Discover - Near</title>
		
		<?php
			include("template.php");
		?>
		
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
		<!-- /Navigation -->
		
		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
			
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			<!-- /Indicators -->
			
			<!-- Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/drake.jpeg">
					<div class="carousel-caption">
						<h3>Drake Is Getting "Rich Off A Mixtape" for the Second Time</h3>
						<p>If You're Reading This It's Too Late is even breaking Spotify records.</p>
					</div>
				</div>
				<div class="item">
					<img src="images/tyga.jpeg">
					<div class="carousel-caption">
						<h3>Chris Brown and Tyga Hope You "Remember" This New Single</h3>
						<p>Listen to "Remember Me" as you prep for Fan Of A Fan 2.</p>
					</div>
				</div>
				<div class="item">
					<img src="images/drake.jpeg">
					<div class="carousel-caption">
						<h3>Drake Is Getting "Rich Off A Mixtape" for the Second Time</h3>
						<p>If You're Reading This It's Too Late is even breaking Spotify records.</p>
					</div>
				</div>
				<div class="item">
					<img src="images/tyga.jpeg">
					<div class="carousel-caption">
						<h3>Chris Brown and Tyga Hope You "Remember" This New Single</h3>
						<p>Listen to "Remember Me" as you prep for Fan Of A Fan 2.</p>
					</div>
				</div>
			</div>
			<!-- /Slides -->
			
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<br>
		<!-- /Carousel -->
		
		<!-- Container -->
		<div class="container">
			
			<!-- Title -->
			<h1><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> Discover <small>Find the hottest tracks and personalized recommendations.</small></h1>
			<br>
			<!-- /Title -->
			
			<!-- Category -->
			<?php
				if      (!$_GET["s"])                     $title = "Trending";
				else if ($_GET["s"] == "alternativerock") $title = "Alternative Rock";
				else if ($_GET["s"] == "danceedm")        $title = "Dance & EDM";
				else if ($_GET["s"] == "dubstep")         $title = "Dubstep";
				else if ($_GET["s"] == "hiphoprap")       $title = "Hip-Hop & Rap";
				else if ($_GET["s"] == "house")           $title = "House";
				else if ($_GET["s"] == "indie")           $title = "Indie";
				else if ($_GET["s"] == "metal")           $title = "Metal";
				else if ($_GET["s"] == "pop")             $title = "Pop";
				else if ($_GET["s"] == "rbsoul")          $title = "R&B & Soul";
				else if ($_GET["s"] == "reggae")          $title = "Reggae";
				else if ($_GET["s"] == "rock")            $title = "Rock";
			?>
			
			<div class="btn-group">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $title; ?> <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li<?php if (!$_GET["s"]) echo ' class="active"';?>><a href="discover.php">Trending</a></li>
					<script>if (Parse.User.current()) document.write('<li><a href="?s=recommendations">Recommendations</a></li>');</script>
					<li class="divider"></li>
					<li<?php if ($_GET["s"] == "alternativerock") echo ' class="active"';?>><a href="?s=alternativerock">Alternative Rock</a></li>
					<li<?php if ($_GET["s"] == "danceedm")        echo ' class="active"';?>><a href="?s=danceedm">Dance & EDM</a></li>
					<li<?php if ($_GET["s"] == "dubstep")         echo ' class="active"';?>><a href="?s=dubstep">Dubstep</a></li>
					<li<?php if ($_GET["s"] == "hiphoprap")       echo ' class="active"';?>><a href="?s=hiphoprap">Hip-Hop & Rap</a></li>
					<li<?php if ($_GET["s"] == "house")           echo ' class="active"';?>><a href="?s=house">House</a></li>
					<li<?php if ($_GET["s"] == "indie")           echo ' class="active"';?>><a href="?s=indie">Indie</a></li>
					<li<?php if ($_GET["s"] == "metal")           echo ' class="active"';?>><a href="?s=metal">Metal</a></li>
					<li<?php if ($_GET["s"] == "pop")             echo ' class="active"';?>><a href="?s=pop">Pop</a></li>
					<li<?php if ($_GET["s"] == "rbsoul")          echo ' class="active"';?>><a href="?s=rbsoul">R&B & Soul</a></li>
					<li<?php if ($_GET["s"] == "reggae")          echo ' class="active"';?>><a href="?s=reggae">Reggae</a></li>
					<li<?php if ($_GET["s"] == "rock")            echo ' class="active"';?>><a href="?s=rock">Rock</a></li>
				</ul>
			</div>
			<br>
			<!-- /Category -->
			
			<!-- Row -->
			<div class="row">
				
				<!-- Main -->
				<div class="col-md-9">
					
					<hr>
					<h4><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> Throw Sum Mo (feat. Nicki Minaj & Young Thug) <small>Rae Sremmurd</small></h4>
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
					
					<!-- Pager -->
					<nav>
						<ul class="pager">
							<li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Next</a></li>
							<li class="next"><a href="#">Previous <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
					</nav>
					
				</div>
				
				<!-- Side -->
				<div class="col-md-3">
					
					<!-- Search -->
					<input id="search" type="text" class="form-control" placeholder="Search" onchange="search()">
					<br>
					<!-- /Search -->
					
					<!-- Who to Follow -->
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
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 202,124
						</div>
					</div>
					<br>
					<!-- /Who to Follow -->
					
					<!-- Advertisement -->
					<div class="well" style="height: 243px;">
					</div>
					<!-- /Advertisement -->
					
				</div>
				<!-- /Side -->
				
			</div>
			<!-- /Row -->
			
			<!-- Footer -->
			<hr style="margin-top: 0px;">
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
			<!-- /Footer -->
			
		</div>
		
		<script>
		
			function search() {
				window.location.replace("search.php?q=" + document.getElementById("search").value);
			}
		
		</script>
		
	</body>
</html>