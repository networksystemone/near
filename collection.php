<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--<link rel="icon" href="../../favicon.ico">-->
		
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
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Near</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="collection.php">Collection</a></li>
						<li><a href="discover.php">Discover</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="signin.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
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
		
		<div class="container">
			
			<script>
				Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
				
				var currentUser = Parse.User.current();
				if (currentUser) {
				    alert("You're signed in.");
				} else {
				    window.location.replace("signin.php");
				}
			</script>
			
			<h1 class="text-center">&middot; Collection &middot;</h1>
			
			
			<button type="button" class="btn btn-success">Add</button>
			
			<br>
			
			<br>
			
			<div class="row">
				<div class="col-md-9">
					<table class="table table-striped table-condensed">
						<thead>
							<tr>
								<th></th>
								<th>Track</th>
								<th>Artist</th>
								<th>Time</th>
								<th>Album</th>
								<th>Added</th>
								<th>Link</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href="#" target="blank"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
								<td>The Blacker the Berry</td>
								<td>Kendrick Lamar</td>
								<td>5:32</td>
								<td>The Blacker the Berry</td>
								<td>1 day ago</td>
								<td>#</td>
							</tr>
							<tr>
								<td><a href="#" target="blank"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
								<td>Tree of Life</td>
								<td>Ab-Soul</td>
								<td>5:37</td>
								<td>These Days...</td>
								<td>1 day ago</td>
								<td>#</td>
							</tr>
							<tr>
								<td><a href="#" target="blank"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> &nbsp;<a href="#" target="blank"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
								<td>Fire Squad</td>
								<td>J. Cole</td>
								<td>4:48</td>
								<td>2014 Forest Hills Drive</td>
								<td>1 day ago</td>
								<td>#</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-3">
					
					<form>
						<div class="form-group">
							<input type="text" class="form-control" id="exampleInputName2" placeholder="Filter">
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
				</div>
			</div>
			
			<br>
	  
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Collection</li>
			</ol>

			<hr>

			<footer>
				<p>&copy; 2015 Figure Inc.</p>
			</footer>
		</div>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>