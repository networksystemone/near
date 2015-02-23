<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Track - Near</title>
		
		<?php
			include("template.php");
		?>
		
		
	</head>
	<body>
		
		<!-- Facebook -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1433548803550619&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<!-- Main Script -->
		<script>
			Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
			
			var GameScore = Parse.Object.extend("Track");
			var query = new Parse.Query(GameScore);
			query.get(<?php echo "'" . $_GET['t'] . "'"; ?>, {
				success: function(gameScore) {
					document.getElementById("title").innerHTML = '<span class="glyphicon glyphicon-cd" aria-hidden="true"></span> ' + gameScore.get("title")+ ' <small>' + gameScore.get("artist")+ '</small>';
				},
				error: function(object, error) {
					alert("Error: " + error.code + " " + error.message);
				}
			});
		</script>
		
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
					
					<!-- Brand -->
					<a class="navbar-brand" href="index.php">Near</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					
					<!-- Left Links -->
					<ul class="nav navbar-nav">
						<li><a href="collection.php">Collection</a></li>
						<li><a href="discover.php">Discover</a></li>
					</ul>
					
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
				</div>
			</div>
		</nav>
		
		<!-- Container -->
		<div class="container">
			
			<h1 id="title"><span class="glyphicon glyphicon-cd" aria-hidden="true"></span></h1>
			<br>
			
			<!-- Row -->
			<div class="row">
				
				<!-- Main -->
				<div class="col-md-10">
					
					<p><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> 10,000 &nbsp; <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 10,000 &nbsp; <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 10,000</p>
					
					<div class="well">
						<iframe width="100%" height="500px" src="https://www.youtube.com/embed/6AhXSoKa8xw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
					
					<!-- Facebook -->
					<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
				</div>
				
				<!-- Side -->
				<div class="col-md-2">
					<button type="button" class="btn btn-success btn-block"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Save</button>
					<br>
					<button type="button" class="btn btn-default btn-block"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Share</button>
					
					<hr>
					<p>Owner: Kendrick Lamar (<a href="#">kendricklamar</a>)</p>
					<p>Added: February 12, 2015</p>
					<hr>
					<p><a href="#">Genius</a></p>
					<p><a href="#">iTunes</a></p>
				</div>
			</div>
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<script>
			
			// Search
			function search() {
				window.location.replace("?q=" + document.getElementById("search").value);
			}
			
		</script>
		
	</body>
</html>