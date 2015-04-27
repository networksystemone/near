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
						<li class="active"><a href="collection.php">Collection</a></li>
						<li               ><a href="discover.php"  >Discover</a  ></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<script>
							Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
							
							document.write('<li><a href="account.php">'+ Parse.User.current().get("name") + '</a></li>');
						</script>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li                ><a href="#companyModal" data-toggle="modal" data-target="#companyModal"    >Company</a></li>
								<li class="divider"></li>
								<li                ><a href="#downloadsModal" data-toggle="modal" data-target="#downloadsModal">Downloads</a></li>
								<li                ><a href="//figure-near.tumblr.com" target="blank"                          >Blog</a></li>
								<li                ><a href="#careersModal" data-toggle="modal" data-target="#careersModal"    >Careers</a></li>
								<li class="divider"></li>
								<li                ><a href="#"                                                                >Forums</a></li>
								<li                ><a href="#"                                                                >Help Center</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Navigation -->
		
		<!-- Container -->
		<div class="container">
			
			<h1><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Collection <small>All your music in one place.</small></h1>
			<br>
			
			<div class="row">
				
				<div class="col-md-10">
					
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a href="#">Saved</a></li>
						<li role="presentation"><a href="#">Owned</a></li>
					</ul>
					<br>
					
					<table class="table table-hover table-condensed">
						<thead>
							<tr>
								<th></th>
								<th>Title</th>
								<th>Artist</th>
								<th>Album</th>
								<th>Time</th>
								<th>Saved</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="trackTable">
						</tbody>
					</table>
					
				</div>
				
				<div class="col-md-2">
					<input id="filter" type="text" class="form-control" placeholder="Filter" onchange="filter()">
					<br>
					<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Track</button>
					<br>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Share</button>
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Export</button>
					</div>
					<br><br>
					<div class="well" style="height: 164px;">
					</div>
				</div>
			</div>
			
			<hr style="margin-top: 0px;">
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<!-- Add Track Modal -->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<!-- Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add Track</h4>
					</div>
					<!-- /Header -->
					
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
						<select id="genre" class="form-control">
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
						<input id="public" type="checkbox" checked> Make track public
						<p class="help-block">Making a track public helps the Near community. <a href="#">Learn More</a></p>
						
					</div>
					<!-- /Body -->
					
					<!-- Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success" onclick="addTrack()">Add Track</button>
					</div>
					<!-- /Footer -->
				</div>
			</div>
		</div>
		<!-- /Add Track Modal -->
		
		<!-- Add Track -->
		<script>
			function addTrack() {
				
				var Extension = Parse.Object.extend("Track");
				var query = new Extension();
				
				query.set("owner",  Parse.User.current().id);
				query.set("link",   document.getElementById("link").value);
				query.set("title",  document.getElementById("title").value);
				query.set("artist", document.getElementById("artist").value);
				query.set("album",  document.getElementById("album").value);
				query.set("time",   document.getElementById("time").value);
				query.set("genre",  document.getElementById("genre").value);
				
				if (document.getElementById("public").checked) {
					query.set("public", true);
				} else {
					query.set("public", false);
				}
				
				query.save(null, {
					success: function(query) {
						// Success
						location.reload();
					},
					error: function(query, error) {
						// Failure
						alert("Error: " + error.message);
					}
				});
			}
		</script>
		<!-- /Add Track -->
		
		<!-- Remove Track Modal -->
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
						<button type="button" class="btn btn-danger" onclick="remove()">Remove Track</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Remove Track Modal -->
		
		<!-- Remove Track -->
		<script>
			function removeTrack() {
				location.reload();
			}
		</script>
		<!-- /Remove Track -->
		
		
		
		
		
		<script>
			
			// Redirect
			if (!Parse.User.current()) window.location.replace("signin.php");
			// /Redirect
			
			// Track Query
			var saveQuery = new Parse.Query(Parse.Object.extend("Save"));
			saveQuery.equalTo("owner", Parse.User.current().id);
			
			var trackQuery = new Parse.Query(Parse.Object.extend("Track"));
			trackQuery.matchesKeyInQuery("objectId", "track", saveQuery);
			trackQuery.descending("createdAt");
			trackQuery.find({ 
				success: function(results) {
					
					document.getElementById("trackTable").innerHTML = "";
					for (var i = 0; i < results.length; i++) { 
						var object = results[i];
						
						var date = new Date(object.createdAt);
						var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
						
						document.getElementById("trackTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
					}
				}
			});
			// /Track Query
			
			// Filter
			function filter() {
				
				var query = new Parse.Query(Parse.Object.extend("Track"));
				query.contains("title", document.getElementById("filter").value);
				query.ascending("createdAt");
				query.find({
					success: function(results) {
						
						document.getElementById("trackTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("trackTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="track.php?t=' + object.id + '"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td></tr>';
						}
					}
				});
			}
			// /Filter
		</script>
		
		<!-- Autofocus Workaround -->
		<script>
			$('#addModal').on('shown.bs.modal', function() {
				$(this).find('[autofocus]').focus();
			});
		</script>
	</body>
</html>