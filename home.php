<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Home</title>
    <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <!--- Navigation -->
    <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/bootstrap.png"></a> <button class="navbar-toggler"
                data-target="#navbarResponsive" data-toggle="collapse" type="button"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="portfolio.php">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pricing.php">Pricing</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link" href="contact-us.php">Contact Us</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" href="logout.php">Log Out</a>
					</li>
                </ul>
            </div>
        </div>
    </nav>
    <!--- End Navigation -->

    <div class="container">
        <div class="login-box">
            <div class="row">
         <h1>Hello <?php echo $_SESSION['username']; ?> </h1>
            </div>
        </div>
    </div>








    <!--- Script Source Files -->
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>