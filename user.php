<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title id="headTitle">Name - Near</title>
		
		<?php
			include("template.php");
		?>
		
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
		
		<!-- Main Script -->
		<script>
			Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
			
			// Query
			var query = new Parse.Query(Parse.User);
			query.get(<?php echo "'" . $_GET['u'] . "'"; ?>, {
				success: function(user) {
					document.getElementById("title").innerHTML = user.get("name") + ' <small>' + user.get("username") + '</small>';
					
					document.getElementById("headTitle").innerHTML = user.get("name") + ' - Near';
				},
				error: function(object, error) {
					
					if (error.code == 101) {
						alert("User Not Found");
					} else {
						alert("Error: " + error.code + " " + error.message);
					}
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
			
			<br>
			
			<center>
				<img src="images/profile.jpg" class="img-thumbnail" width="200px">
				<br>
				<br>
				<span style="font-family: 'Pacifico'; font-size: 50px;">Andre Nickatina</span>
				<br>
				<span style="font-size: 20px; color: grey;">andrenickatina</span>
				<br><br>
				<button type="button" class="btn btn-success" onclick="follow()"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Follow</button>
				<br><br>
			</center>
			
			<div class="row">
				
				<div class="col-md-1">
				</div>
				
				<div class="col-md-10">
					<table class="table table-condensed">
						<thead>
							<tr>
								<th></th>
								<th>Title</th>
								<th>Artist</th>
								<th>Album</th>
								<th>Time</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a role="button" class="btn btn-default btn-xs" href="track.php"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td>
								<td>The Blacker the Berry</td>
								<td>Kendrick Lamar</td>
								<td>The Blacker the Berry</td>
								<td>3:54</td>
							</tr>
							<tr>
								<td><a role="button" class="btn btn-default btn-xs" href="track.php"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td>
								<td>The Blacker the Berry</td>
								<td>Kendrick Lamar</td>
								<td>The Blacker the Berry</td>
								<td>3:54</td>
							</tr>
							<tr>
								<td><a role="button" class="btn btn-default btn-xs" href="track.php"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td>
								<td>The Blacker the Berry</td>
								<td>Kendrick Lamar</td>
								<td>The Blacker the Berry</td>
								<td>3:54</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="col-md-1">
				</div>
			</div>
			
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<script>
			
			// Follow
			function follow() {
				
			}
		</script>
		
	</body>
</html>