<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Account - Near</title>
		
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Parse -->
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
			.input-group-addon {
				min-width: 90px;
				text-align: left;
			}
		</style>
		
	</head>
	<body>
		
		<script>
			Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
		</script>
		
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
						<li><a href="discover.php">Discover</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<script>
							document.write('<li><a href="account.php">' + Parse.User.current().get("name") + '</a></li>');
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
		
		<div class="container">
			
			<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account <small>Make changes to your Near account here.</small></h1>
			<hr>
			
			<div class="row">
				<div class="col-md-2">
					
					<!-- Picture -->
					<img src="profile.jpg" class="img-thumbnail">
					<br><br>
					
					<!-- Change Picture -->
					<button class="btn btn-default btn-block" type="button">Change Picture</button>
					<br>
					
					<!-- Sign Out -->
					<button class="btn btn-default btn-block" type="button" onclick="signOut()">Sign Out</button>
					<br>
					
					<!-- Delete Account -->
					<button class="btn btn-danger btn-block" type="button" data-toggle="modal" data-target="#deleteAccountModal">Delete Account</button>
					<br>
				</div>
				<div class="col-md-6">
					
					<!-- Name -->
					<div class="input-group">
						<span class="input-group-addon">Name</span>
						<input id="name" type="text" class="form-control" placeholder="Username">
					</div>
					<br>
					
					<!-- Email -->
					<div class="input-group">
						<span class="input-group-addon">Email</span>
						<input id="email" type="text" class="form-control" placeholder="Email">
					</div>
					<br>
					
					<!-- Username -->
					<div class="input-group">
						<span class="input-group-addon">Username</span>
						<input id="username" type="text" class="form-control" placeholder="Username">
					</div>
					<br>
					
					<!-- Password -->
					<div class="input-group">
						<span class="input-group-addon">Password</span>
						<input id="password" type="password" class="form-control" placeholder="Password">
					</div>
					<p class="help-block">Leave blank if you do not wish to change your password.</p>
					<br>
					
					<!-- Save -->
					<button class="btn btn-success" type="button" onclick="save()">Save</button>
					<br>
					<br>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Account</li>
			</ol>
			
			<!-- Footer -->
			<hr>
			<footer>
				<p>&copy; 2015 Figure Inc. &middot; Made in Seattle &middot; <a href="#">Company</a> &middot; <a href="#">Downloads</a> &middot; <a href="#">Blog &middot; <a href="#">Careers</a> &middot; <a href="#">Forums</a> &middot; <a href="#">Help Center</a></p>
			</footer>
		</div>
		
		<!-- ########## Modals ########## -->
		
		<!-- Delete Account Modal -->
		<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Delete Account</h4>
					</div>
					<div class="modal-body">
						<p>Are you sure you would like to delete your account? This action is permanent. Type your passwod if you wish to proceed.</p>
						<input id="password" type="password" class="form-control" placeholder="Password">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-danger" onclick="deleteAccount()">Delete Account</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- ########## JavaScript ########## -->
		
		<script>
				
			// Redirect
			if (!Parse.User.current()) {
				window.location.replace("signin.php");
			}
			
			document.getElementById("name").value = Parse.User.current().get("name");
			document.getElementById("email").value = Parse.User.current().get("email");
			document.getElementById("username").value = Parse.User.current().get("username");
			
			// Sign Out
			function signOut() {
				Parse.User.logOut();
				window.location.replace("index.php");
			}
			
			// Save
			function save() {
				var currentUser = Parse.User.current();
				currentUser.set("name", document.getElementById("name").value);
				currentUser.set("email", document.getElementById("email").value);
				currentUser.set("username", document.getElementById("username").value);
				if (document.getElementById("password").value) currentUser.set("password", document.getElementById("password").value);
				
				currentUser.save();
				
				alert("Your preferences have been saved.");
				
				Parse.User.current().refresh();
				
				// Doesn't work right
				location.reload();
			}
			
			// Delete Account
			function deleteAccount() {
				/*myObject.destroy({
					success: function(myObject) {
						// The object was deleted from the Parse Cloud.
					},
					error: function(myObject, error) {
						// The delete failed.
						// error is a Parse.Error with an error code and message.
					}
				});*/
				location.reload();
			}
		
		</script>
		
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>