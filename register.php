<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Registration</title>
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="login.php"><img src="img/bootstrap.png"></a> <button class="navbar-toggler"
				data-target="#navbarResponsive" data-toggle="collapse" type="button"><span
					class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="login.php">Login</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" href="portfolio.php">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pricing.php">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact-us.php">Contact Us</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->

	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 register-box">
					<h3>Do you want to play ? Please Register Here !!</h3>
					<form action="registration.php" method="post">
					<div class="form-group">
						<label>
							Username
						</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
						<label>
							Password
						</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
					<br>
					<a href="login.php">Go back to Login Page</a>
					</form>
				</div>
			</div>
		</div>
	</div>








	<!--- Script Source Files -->
	<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<!--- End of Script Source Files -->

</body>

</html>