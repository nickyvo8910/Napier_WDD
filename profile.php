<!DOCTYPE html>

<?php
// 1. connect to the database
session_start();

$server = '40452569@wdd.napier.ac.uk';
$database = '40452569';
$username = '40452569';
$password = 'dUptbimB';

$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
}
$userid = '';
$userid = strtolower(test_input($_SESSION['username']));
$query = "select * from members where email='$userid'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

$row = mysqli_fetch_assoc($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $server = 'localhost';
    $database = 'wine2door';
    $username = '40452569';
    $password = 'minhnhut';

    $connect = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
        die('Could not connect: ' . mysqli_connect_error());
    }


    if (isset($_POST['update'])) {

        $userid = ''; // Reset all variables

        $firstname = '';
        $lastname = '';
        $address = '';

        $userid = strtolower(test_input($_SESSION['username']));

            $firstname = test_input($_POST["firstname"]);

            $lastname = test_input($_POST["lastname"]);

            $address = test_input($_POST["address"]);


        $query = "UPDATE members SET first_name = '$firstname', last_name = '$lastname', address = '$address' WHERE members.email = '$userid'";
        mysqli_query($connect, $query);
        header("location: profile.php");
        die();


    }}

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<html>
<head>
<title>Wine2Door - Wine Delivery Service</title>
<meta http-equiv="Content-Type" content="charset=UTF-8" />
<link rel="stylesheet" href="css\main.css" type="text/css">
<!-- JS Source : http://javascript-coder.com/html-form/javascript-form-validation.phtml -->
<script src="js/gen_validatorv4.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header>
			<div class="col-12">
				<a href="home.php"> <img id="logo" src="img/logo-banner.png"
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

		<!-- Profile -->

		<div class="col-12 login">
			<div class="form">
				<form id="form-reg" action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="post">

					<label class="col-m-6 form-label" for="username">User name:</label>
					<br /> <input class="col-m-6 form-ctrl" type="text" name="username"
						id="username" size="30" maxlength="60" readonly="readonly" value="<?php echo $row[email];?>"/>
					<div class="col-m-12 form-ctrl">
						Passwords changing facilities are underconstruction. <br> Please
						contact website administrators for supoort during this time. <br />
						Your details can be updated using the following form. <br>
					</div>
					<label class="col-m-6 form-label" for="firstname">First name:</label>
					<br /> <input class="col-m-6 form-ctrl" type="text"
						name="firstname" id="firstname" size="30" maxlength="60" value="<?php echo $row[first_name];?>" />
					<label	class="col-m-6 form-label" for="lastname">Last name:</label>
					<br />
					<input class="col-m-6 form-ctrl" type="text" name="lastname"
						id="lastname" size="30" maxlength="60"
						value="<?php echo $row[last_name];?>" />



						<label
						class="col-m-6 form-label" for="address">Address:</label> <br /> <input
						class="col-m-6 form-ctrl" type="text" name="address" id="address"
						size="30" maxlength="60" value="<?php echo $row[address];?>" /> <br />
					<input class="col-m-12 form-ctrl" type="submit" name="update"
						value="Update your Account" onsubmit="return confirm('Are you sure ?')"/>

				</form>
				<script type="text/javascript">
 					var frmvalidator  = new Validator("form-reg");
 					frmvalidator.addValidation("firstname","maxlen=50","Maximum length is 50 characters.");
 					frmvalidator.addValidation("lastname","maxlen=50","Maximum length is 50 characters.");
 					frmvalidator.addValidation("address","maxlen=500","Maximum length is 500 characters.");
				</script>
			</div>
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
