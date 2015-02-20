<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Collection - Near</title>
		
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Parse -->
		<script src="//www.parsecdn.com/js/parse-1.3.4.min.js"></script>
		
		<!-- Spin.js -->
		<script src="//fgnass.github.io/spin.js/spin.min.js"></script>
		
		<!-- AddThis -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54e467f74da914f3" async="async"></script>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<style>
			body {
				padding-top: 50px;
			}
			.input-group-addon {
				min-width: 65px;
				text-align: left;
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
						<li class="active"><a href="collection.php">Collection</a></li>
						<li               ><a href="discover.php"  >Discover</a  ></li>
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
								<li                ><a href="#">Company</a    ></li>
								<li class="divider"                           ></li>
								<li                ><a href="#">Downloads</a  ></li>
								<li                ><a href="#">Blog</a       ></li>
								<li                ><a href="#">Careers</a    ></li>
								<li class="divider"                           ></li>
								<li                ><a href="#">Forums</a     ></li>
								<li                ><a href="#">Help Center</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- Container -->
		<div class="container">
			
			<!-- Warning -->
			<br>
			<div class="alert alert-warning" role="alert">
				<strong>Warning!</strong> Near is in beta. Some features may not work properly.
			</div>
			
			<!-- Title -->
			<h1><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Collection <small>All your music in one place.</small></h1>
			<br>
			
			<!-- Row -->
			<div class="row">
				
				<!-- Main -->
				<div class="col-md-9">
					
					<!-- Navigation -->
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"  ><a href="#">All Tracks</a             ></li>
						<li role="presentation" class="disabled"><a href="#">Playlists (Coming Soon)</a></li>
					</ul>
					<br>
					
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
								<th>Actions</th>
							</tr>
						</thead>
						
						<!-- Table Body -->
						<tbody id="myTable">
						</tbody>
					</table>
					
					<!-- Spinner -->
					<div id="spinner"></div>
					
				</div>
				
				<!-- Side -->
				<div class="col-md-3">
					
					<!-- Filter -->
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="filter" placeholder="Filter">
						</div>
					</form>
					
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
					
					<!-- Add Track -->
					<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Track</button>
					<br>
					
					<!-- Share & Export -->
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Share</button>
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Export</button>
					</div>
					<br><br>
					
					<!-- Details -->
					<span id="details">0 track(s)</span>
					<br><br>
					
					<!-- Advertisement -->
					<div class="well" style="height: 243px;"></div>
				</div>
			</div>
			
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Collection</li>
			</ol>
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		
		
		
		
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
		
		<!-- Information Modal -->
		<div class="modal fade" id="informationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<!-- Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Track Information</h4>
					</div>
					
					<!-- Body -->
					<div class="modal-body">
						
						<div class="row">
							<div class="col-md-3">
								<img src="http://upload.wikimedia.org/wikipedia/en/6/65/KendrickGKMCDeluxe.jpg" width="130px">
							</div>
							<div class="col-md-9">
								<h4><span style="color: red;" class="glyphicon glyphicon-fire" aria-hidden="true"></span> <span style="color: red;">Fire</span> The Blacker the Berry</h4>
								<p>Artist: Kendrick Lamar</p>
								<p>Album: The Blacker the Berry</p>
								<p>Time: 5:37</p>
							</div>
						</div>
						<hr>
						<p>Played: <b>4,509</b></p>
						<p>Saved: <b>2,909</b></p>
						<hr>
						<p>Owner: Kendrick Lamar (<a href="#">kendricklamar</a>)</p>
						<p>Added: February 12, 2015</p>
						<p>Public: Yes</p>
						<hr>
						<p><a href="//genius.com" target="blank">Genius</a></p>
						<p><a href="//itunes.com" target="blank">iTunes</a></p>
						<hr>
						<!-- AddThis -->
						<div class="addthis_native_toolbox"></div>
						
					</div>
					
					<!-- Footer -->
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
					
					<!-- Header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Edit Track</h4>
					</div>
					
					<!-- Body -->
					<div class="modal-body">
						
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
						
						<input type="checkbox" checked> Make track public
						<p class="help-block">Making a track public helps the Near community. <a href="#">Learn More</a></p>
					</div>
					
					<!-- Footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success">Save</button>
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
				
				var query = new Parse.Query(Parse.Object.extend("Music"));
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
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default" data-toggle="modal" data-target="#informationModal"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
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
				
				var query = new Parse.Query(Parse.Object.extend("Music"));
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
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default" data-toggle="modal" data-target="#informationModal"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
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
				
				var query = new Parse.Query(Parse.Object.extend("Music"));
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
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default" data-toggle="modal" data-target="#informationModal"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
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
				
				var query = new Parse.Query(Parse.Object.extend("Music"));
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
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default" data-toggle="modal" data-target="#informationModal"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
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
				
				var query = new Parse.Query(Parse.Object.extend("Music"));
				query.equalTo("owner", Parse.User.current().id);
				query.descending("createdAt");
				query.find({
					success: function(results) {
						
						spinner.stop();
						
						document.getElementById("details").innerHTML = results.length + " track(s)";
						document.getElementById("myTable").innerHTML = "";
						for (var i = 0; i < results.length; i++) { 
							var object = results[i];
							
							var date = new Date(object.createdAt);
							var saved = date.getMonth() + "/" + date.getDate() + "/" + date.getFullYear();
							
							document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"> &nbsp; &nbsp; <span class="glyphicon glyphicon-play" aria-hidden="true"></span> &nbsp; &nbsp; </a></td><td>' + object.get('title') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('album') + '</td><td>' + object.get('time') + '</td><td>' + saved + '</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default" data-toggle="modal" data-target="#informationModal"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default" data-toggle="modal" data-target="#removeModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
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
				
				var Extension = Parse.Object.extend("Music");
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
		</script>
		
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Autofocus Workaround -->
		<script>
			$('#addModal').on('shown.bs.modal', function() {
				$(this).find('[autofocus]').focus();
			});
			
			$('#editModal').on('shown.bs.modal', function() {
				$(this).find('[autofocus]').focus();
			});
		</script>
	</body>
</html>