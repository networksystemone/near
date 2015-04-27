<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Track - Near</title>
		
		<?php
			include("template.php");
		?>
		
		<style>
			.input-group-addon {
				min-width: 65px;
				text-align: left;
			}
		</style>
		
	</head>
	<body>
		
		<script>
			Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
			
			// Get Track Data
			var query = new Parse.Query(Parse.Object.extend("Track"));
			query.get(<?php echo '"' . $_GET['t'] . '"'; ?>, {
				success: function(gameScore) {
					
					document.getElementById("myTitle").innerHTML = '<span class="glyphicon glyphicon-cd" aria-hidden="true"></span> ' + gameScore.get("title") + ' <small>' + gameScore.get("artist") + '</small>';
					
					if (gameScore.get("owner") == Parse.User.current().id) document.getElementById("edit").innerHTML = '<br><button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</button>';
					
					// Fill Out Edit Fields
					document.getElementById("link").value   = gameScore.get("link");
					document.getElementById("title").value  = gameScore.get("title");
					document.getElementById("artist").value = gameScore.get("artist");
					document.getElementById("album").value  = gameScore.get("album");
					document.getElementById("time").value   = gameScore.get("time");
				},
				error: function(object, error) {
					alert("Error: " + error.code + " " + error.message);
				}
			});
			
			// Get Number of Saves
			var query = new Parse.Query(Parse.Object.extend("Save"));
			query.equalTo("track", <?php echo '"' . $_GET['t'] . '"'; ?>);
			query.find({
				success: function(results) {
					document.getElementById("saves").innerHTML = results.length;
				}
			});
		</script>
		
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
		
		<div class="container">
			
			<h1 id="myTitle"><span class="glyphicon glyphicon-cd" aria-hidden="true"></span> Title <small>Artist</small></h1>
			<br>
			
			<p><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> <span id="plays">0</span> &nbsp; <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span id="saves">0</span> &nbsp; <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <span id="comments">0</span></p>
			
			<div class="row">
				
				<div class="col-md-10">
					<div class="well">
						<iframe width="100%" height="500px" src="https://www.youtube.com/embed/6AhXSoKa8xw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
					
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
					<!-- /Facebook -->
				</div>
				
				<div class="col-md-2">
					
					<button type="button" class="btn btn-success btn-block" onclick="save()" id="save"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Save</button>
					<br>
					<button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#shareModal"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Share</button>
					
					<div id="edit"></div>
					
					<hr>
					<p>Owner: Kendrick Lamar (<a href="#">kendricklamar</a>)</p>
					<p>Added: February 12, 2015</p>
					<hr>
					<p><a href="#" target="blank">Genius</a></p>
					<p><a href="#" target="blank">iTunes</a></p>
				</div>
			</div>
			
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<!-- Share Modal -->
		<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Share Track</h4>
					</div>
					
					<div class="modal-body">
						<p>Share this track with your friends.</p>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Edit Modal -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Edit Track</h4>
					</div>
					
					<div class="modal-body">
						
						<div class="input-group">
							<span class="input-group-addon">Link</span>
							<input id="link" type="text" class="form-control" placeholder="Link">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">Title</span>
							<input id="title" type="text" class="form-control" placeholder="Title">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">Artist</span>
							<input id="artist" type="text" class="form-control" placeholder="Artist">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">Album</span>
							<input id="album" type="text" class="form-control" placeholder="Album">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon">Time</span>
							<input id="time" type="text" class="form-control" placeholder="Time">
						</div>
						<br>
						
						<select class="form-control">
							<option>Alternative Rock</option>
							<option>Dance & EDM</option>
							<option>Dubstep</option>
							<option>Hip-Hop & Rap</option>
							<option>House</option>
							<option>Indie</option>
							<option>Metal</option>
							<option>Pop</option>
							<option>R&B & Soul</option>
							<option>Reggae</option>
							<option>Rock</option>
						</select>
						<br>
						
						<input type="checkbox" checked> Make track public
						<p class="help-block">Making a track public helps the Near community. <a href="#">Learn More</a></p>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success" onclick="saveChanges()">Save</button>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			var co = 0;
			
			var query = new Parse.Query(Parse.Object.extend("Save"));
			query.equalTo("owner", Parse.User.current().id);
			query.find({
				success: function(results) {
					
					for (var i = 0; i < results.length; i++) { 
						var object = results[i];
						
						if (object.get('track') == <?php echo "'" . $_GET["t"] . "'"; ?>) {
							document.getElementById("save").innerHTML = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Remove';
						}
						
					}
				}
			});
		
			function save() {
				
				if (co == 0) {
					document.getElementById("save").innerHTML = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Remove';
					co = 1;
				} else {
					document.getElementById("save").innerHTML = '<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Save';
					co = 0;
				}
			}
			
			function saveChanges() {
				location.reload();
			}
		
		</script>
		
	</body>
</html>