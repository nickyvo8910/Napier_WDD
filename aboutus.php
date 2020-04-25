<!DOCTYPE html>
<?php
session_start();
$server = '40452569@wdd.napier.ac.uk';
$database = '40452569';
$username = '40452569';
$password = 'dUptbimB';

$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno())  {
    die('Could not connect: ' . mysqli_connect_error());
}
?>
<html>
<head>
<title>About Us - Wine2Door - Wine Delivery Service</title>
<meta http-equiv="Content-Type" content="charset=UTF-8" />
<link rel="stylesheet" href="css\main.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header>
			<span> <a href="home.php"> <img id="logo" src="img/logo-banner.png"
					alt="Wine 2 Door Banner"></a>
			</span>
			<div class="col-m-4">
				<a href="home.php"> <img id="logo" src="img/logo-with-slogan.png"
					alt="Wine 2 Door"></a>
			</div>
			<div class="col-m-8">
				<h1>Wine2Door</h1>
				<p>Been delivering your beverages since 2019</p>
			</div>
		</header>

		<!-- NavBar -->
		<nav>
			<a href="aboutus.php">About Us</a> | <a href="home.php">Our Products</a> | <?php if (!isset($_SESSION['username'])) {?> <a
				href="signin.php">Sign In</a> | <a href="registration.php">Register</a><?php }else{?> <a
				href="profile.php">Profile</a> | <a href="loggedout.php">Log out</a>
			| <a
				href="registration.php?removeID=<?php echo $_SESSION['username']; ?>"
				onClick="return confirm('Delete This account?')">Deactivate</a><?php }?>
				</nav>

		<div class="col-12">
		<div class='col-6'><img alt="Glasgow" src="img/gla.jpeg"></div>
			<div class='col-6'>
				<p> -Based in Glasgow, Wine2Door is an alcoholic beverage online delivery service
					that gives our customers the ability to order their favourite
					beverage at the comfort of their home using a computer or mobile
					devices, make payments and have it delivered to their doors. This
					also provides efficient order management to the managers.</p>
			</div>
		</div>

		<footer>
			<br> <a href="home.php"> <img id="logo" src="img/logo-footer.jpg"
				alt="Wine 2 Door" width="100%">
			</a>
		</footer>
	</div>
</body>
</html>
