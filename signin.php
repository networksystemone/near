<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--<link rel="icon" href="../../favicon.ico">-->
		
		<title>Sign In - Near</title>
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
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
						<li><a href="collection.php">Collection</a></li>
						<li><a href="discover.php">Discover</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="signin.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
			
			<script src="//www.parsecdn.com/js/parse-1.3.4.min.js"></script>
			
			<script>
				Parse.initialize("uH37tzThA3MpgQL4KQ7fOr5OzkXGpvTxr3Zk4Kbu", "3f80eW7OWD4U8h7URD4iYdQ0TvKHSgIha1AahgHq");
				
				var TestObject = Parse.Object.extend("TestObject");
var testObject = new TestObject();
testObject.save({foo: "bar"}).then(function(object) {
  alert("yay! it worked");
});
			
/*
				var user = new Parse.User();
				user.set("username", "my name");
				user.set("password", "my pass");
				user.set("email", "email@example.com");
				 
				// other fields can be set just like with Parse.Object
				user.set("phone", "415-392-0202");
				 
				user.signUp(null, {
				  success: function(user) {
				    // Hooray! Let them use the app now.
				  },
				  error: function(user, error) {
				    // Show the error message somewhere and let the user try again.
				    alert("Error: " + error.code + " " + error.message);
				  }
				});*/
			</script>
			
			<center>
				<h1>Sign In</h1>
				
				<br>
				
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-success">Sign In</button>
						</form>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</center>
			
			<br>
			
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Sign In</li>
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