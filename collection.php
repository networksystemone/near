<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Collection - Near</title>
		
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
					<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Near <span class="label label-success">Beta</span></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="collection.php">Collection</a></li>
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
		
		<!-- Content -->
		<div class="container">
			
			<script>
				
				// Redirect
				if (!Parse.User.current()) {
					window.location.replace("signin.php");
				} else {
					
				}
			</script>
			
			<!-- Title -->
			<h1>Collection</h1>
			<br>
			
			<div class="row">
				<div class="col-md-9">
					
					<!-- Table -->
					<table class="table table-hover table-condensed">
						<thead>
							<tr>
								<th></th>
								<th>Track</th>
								<th>Artist</th>
								<th>Time</th>
								<th>Album</th>
								<th>Added</th>
								<th></th>
							</tr>
						</thead>
						<tbody id="myTable">
							
							<script>
								var query = new Parse.Query(Parse.Object.extend("Music"));
								query.equalTo("user", Parse.User.current().getObjectId());
								query.find({
									success: function(results) {
										for (var i = 0; i < results.length; i++) { 
											var object = results[i];
											
											document.getElementById("myTable").innerHTML += '<tr><td><a role="button" class="btn btn-default btn-xs" href="' + object.get('link') + '" target="blank"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a></td><td>' + object.get('track') + '</td><td>' + object.get('artist') + '</td><td>' + object.get('time') + '</td><td>' + object.get('album') + '</td><td>1 day ago</td><td><div class="btn-group btn-group-xs" role="group" aria-label="..."><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div></td></tr>';
										}
									},
									error: function(error) {
										alert("Error: " + error.code + " " + error.message);
									}
								});
							</script>
							
							<!--
							<tr>
								<td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button></td>
								<td>Fire Squad</td>
								<td>J. Cole</td>
								<td>4:48</td>
								<td>2014 Forest Hills Drive</td>
								<td>1 day ago</td>
								<td>
									<div class="btn-group btn-group-xs" role="group" aria-label="...">
										<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
										<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
									</div>
								</td>
							</tr>
						-->
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					
					<!-- Add -->
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add</button>
					<br><br>
					
					<!-- Add Modal -->
					<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Add</h4>
								</div>
								<div class="modal-body">
									<p>Fill out the fields below to add a new track.</p>
									
									<form>
										<div class="form-group">
											<input type="text" class="form-control" id="link" placeholder="Link" autofocus>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="track" placeholder="Email">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="artist" placeholder="Artist">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="album" placeholder="Album">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="time" placeholder="Time">
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" checked> Make public
											</label>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-success">Add Track</button>
								</div>
							</div>
						</div>
					</div>
					
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="filter" placeholder="Filter">
						</div>
					</form>
					
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sort <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li class="active"><a href="#">Added</a></li>
							<li><a href="#">Album</a></li>
							<li><a href="#">Artist</a></li>
							<li><a href="#">Track</a></li>
						</ul>
					</div>
					<br>
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
				<p>&copy; 2015 Figure Inc.</p>
			</footer>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>