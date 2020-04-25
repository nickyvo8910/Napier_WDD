<!DOCTYPE html>

<?php
//  1.  connect to the database

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

$query = "select * from products order by name asc";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);


?>

<html>
<head>
<title>Wine2Door - Wine Delivery Service</title>
<meta http-equiv="Content-Type" content="charset=UTF-8" />
<link rel="stylesheet" href="css\main.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header>
			<div class="col-12"> <a href="home.php"> <img id="logo" src="img/logo-banner.png"
					alt="Wine 2 Door Banner"></a>
			</div>
			<div class="row">
				<div class="col-m-4">
					<a href="home.php"> <img id="logo" src="img/logo-with-slogan.png"
						alt="Wine 2 Door"></a>
				</div>
				<div class="col-m-8">
					<h1>Wine2Door</h1>
					<p>Been delivering your beverages since 2019</p>
				</div>
				<!-- NavBar -->
				<nav>
					<a href="aboutus.php">About Us</a> | <a href="home.php">Our
						Products</a> | <?php if (!isset($_SESSION['username'])) {?> <a href="signin.php">Sign In</a> | <a
						href="registration.php">Register</a><?php }else{?> <a href="profile.php">Profile</a> | <a href="loggedout.php">Log out</a> | <a
						href="registration.php?removeID=<?php echo $_SESSION['username']; ?>" onClick="return confirm('Delete This account?')">Deactivate</a><?php }?>
				</nav>
			</div>
		</header>

		<!-- Products -->

		<div class="col-m-12">
		<?php
    $count =0;
		while ($row = mysqli_fetch_assoc($result)){
      $count +=1;
		    echo "<div class='col-m-4 product'>
					<a href='home.php'> <img class='img-product' src='img/$row[img]' alt='$row[img]'></a>

                    <h3>$row[name]</h3>
                    <p> £ $row[price]GBP
                        <br>
                        $row[vol] cl
                        <br>
                        $row[abv]% ABV
                        <br>
                        $row[details]
                    </p>
                    <a href=''>Order this Product</a>

				</div>";
        if($count==2){
          $count=0;
          echo "<br>";
        }
}
?>
		</div>

		<!-- Footer -->
		<footer>
			<br> <a href="home.php"> <img id="logo" src="img/logo-footer.jpg"
				alt="Wine 2 Door" width="100%">
			</a>
		</footer>
	</div>
</body>
</html>
