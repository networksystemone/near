<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Collection - Near</title>
		
		<style>
			.input-group-addon {
				min-width: 65px;
				text-align: left;
			}
			
			/* Responsive Table Mods */
			/*table {
				table-layout:fixed;
			}
			table td {
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}*/
			
			.player {
				position: fixed;
				bottom: 0;
				left: 0;
				right: 0;
				background-color: silver;
				/*height: 50px;*/
				padding-top: 10px;
				padding-bottom: 10px;
				/*opacity: 0.9;*/
				background-color: #F5F5F5;
			}
		</style>
		
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
						<li class="active"><a href="collection.php">Collection</a></li>
						<li               ><a href="discover.php"  >Discover</a  ></li>
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
		
		<!-- Container -->
		<div class="container">
			
			<!-- Warning -->
			<br>
			<div class="alert alert-warning" role="alert">
				<strong>Warning!</strong> Near is in beta. Some features may not work properly.
			</div>
			<!-- /Warning -->
			
			<!-- Title -->
			<h1><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Collection <small>All your music in one place.</small></h1>
			<br>
			<!-- /Title -->
			
			<!-- Row -->
			<div class="row">
				
				<!-- Main -->
				<div class="col-md-10">
					
					<!-- Table -->
					<table class="table table-hover table-condensed">
						
						<!-- Table Head -->
						<thead>
							<tr>
								<th><span class="glyphicon glyphicon-link" aria-hidden="true"></span></th>
								<th>Title</th>
								<th>Artist</th>
								<th>Album</th>
								<th>Time</th>
								<th>Saved</th>
								<th></th>
							</tr>
						</thead>
						<!-- /Table Head -->
						
						<!-- Table Body -->
						<tbody id="myTable">
						</tbody>
						<!-- /Table Body -->
						
					</table>
					<!-- /Table -->
				
					
					<!-- Spinner -->
					<div id="spinner"></div>
					<!-- /Spinner -->
					
				</div>
				<!-- /Main -->
				
				<!-- Side -->
				<div class="col-md-2">
					
					<!-- Filter -->
					<input id="filter" type="text" class="form-control" placeholder="Filter" onchange="filter()">
					<br>
					<!-- /Filter -->
					
					<!-- Sort -->
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sort <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" onclick="sortTitle()" >Title</a ></li>
							<li><a href="#" onclick="sortArtist()">Artist</a></li>
							<li><a href="#" onclick="sortAlbum()" >Album</a ></li>
							<li><a href="#" onclick="sortTime()"  >Time</a  ></li>
							<li><a href="#" onclick="sortSaved()" >Saved</a ></li>
						</ul>
					</div>
					<br><br>
					<!-- /Sort -->
					
					<!-- Add Track -->
					<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Track</button>
					<br>
					<!-- /Add Track -->
					
					<!-- Share & Export -->
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Share</button>
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Export</button>
					</div>
					<br><br>
					<!-- /Share & Export -->
					
					<!-- Details -->
					<span id="details">0 tracks</span>
					<br><br>
					<!-- /Details -->
					
					<!-- Advertisement -->
					<div class="well" style="height: 164px;">
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
		<!-- /Container -->
		
		
		
		
		
		<!-- Modals Begin #################################################################################################### -->
		
		<!-- Add Modal -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<!-- Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add Track</h4>
					</div>
					
					<!-- Body -->
					<div class="modal-body">
						
						<p>Fill out the fields below to add a new track.</p>
						
						<div class="input-group">
							<span class="input-group-addon">Link</span>
							<input id="link" type="text" class="form-control" placeholder="Link" autofocus>
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
						
						<p>Genre</p>
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
					
					<!-- Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success" onclick="addTrack()">Add Track</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Remove Modal -->
		<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<!-- Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Remove Track</h4>
					</div>
					
					<!-- Body -->
					<div class="modal-body">
						<p>Are you sure you want to remove this track? This action is irreversible.</p>
					</div>
					
					<!-- Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-danger">Remove</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modals End #################################################################################################### -->
		
		
		
		
		
		<script>
			
			// Redirect
			if (!Parse.User.current()) {
				window.location.replace("signin.php");
			}
			
			// Spinner
			var opts = {
				lines: 13,
				length: 14,
				width: 6,
				radius: 17,
				corners: 1,
				rotate: 0,
				direction: 1,
				color: '#000',
				speed: 1,
				trail: 60,
				shadow: false,
				hwaccel: false,
				className: 'spinner',
				zIndex: 2e9,
				top: '50%',
				left: '50%'
			};
			var target = document.getElementById("spinner");
			var spinner = new Spinner(opts);
			
			// Default Sort
			sortSaved();
			
			// Sort Title
			function sortTitle() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.equalTo("owner", Parse.User.current().id);
				query.ascending("title");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
			
			// Sort Artist
			function sortArtist() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.equalTo("owner", Parse.User.current().id);
				query.ascending("artist");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
			
			// Sort Album
			function sortAlbum() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.equalTo("owner", Parse.User.current().id);
				query.ascending("album");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
			
			// Sort Time
			function sortTime() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.equalTo("owner", Parse.User.current().id);
				query.ascending("time");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
			
			// Sort Saved
			function sortSaved() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.equalTo("owner", Parse.User.current().id);
				query.descending("createdAt");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						if (results.length == 1) {
							document.getElementById("details").innerHTML = results.length + " track";
						} else {
							document.getElementById("details").innerHTML = results.length + " tracks";
						}
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
			
			// Add Track
			function addTrack() {
				
				var Extension = Parse.Object.extend("Track");
				var query = new Extension();
				
				query.set("owner", Parse.User.current().id);
				query.set("link", document.getElementById("link").value);
				query.set("title", document.getElementById("title").value);
				query.set("artist", document.getElementById("artist").value);
				query.set("album", document.getElementById("album").value);
				query.set("time", document.getElementById("time").value);
				 
				query.save(null, {
					success: function(query) {
						location.reload();
					},
						error: function(query, error) {
						alert("Error: " + error.message);
					}
				});
			}
			
			// Filter
			function filter() {
				spinner.spin(target);
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.contains("title", document.getElementById("filter").value);
				query.ascending("createdAt");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					},
					error: function(error) {
						spinner.stop();
						
						alert("Error: " + error.code + " " + error.message);
					}
				});
			}
		</script>
		
		<!-- Autofocus Workaround -->
		<script>
			$('#addModal').on('shown.bs.modal', function() {
				$(this).find('[autofocus]').focus();
			});
		</script>
	</body>
</html>