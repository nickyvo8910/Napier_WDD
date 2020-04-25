<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['username'])&& !isset($_GET['removeID'])) {
    header("location: home.php");
    die();
}
$server = '40452569@wdd.napier.ac.uk';
$database = '40452569';
$username = '40452569';
$password = 'dUptbimB';

$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
}

    // process-registration-form.php
    // -----------------------------

    // If new visitor, add visitor to database

    if (isset($_POST['register'])) {

        $username = ''; // Reset all variables
        $password = '';
        $firstname = '';
        $lastname = '';
        $address = '';

        if (! empty($_POST['username'])) {
            $username = test_input($_POST["username"]);
        }
        if (! empty($_POST['password'])) {
            $password = test_input($_POST["password"]);
        }

        if (! empty($_POST['$firstname'])) {
            $firstname = test_input($_POST["firstname"]);
        }

        if (! empty($_POST['$lastname'])) {
            $lastname = test_input($_POST["lastname"]);
        }

        if (! empty($_POST['$address'])) {
            $address = test_input($_POST["address"]);
        }


        $query = "insert into members (email, password,first_name,last_name,address) values('$username', '$password', '$firstname', '$lastname', '$address')";

        mysqli_query($connect, $query);
    }

    // If removeID is non-zero (in GET part of incoming URL),
    // then remove visitor with that ID from the table

    if (isset($_GET['removeID'])) {
        $userID = strtolower(test_input($_GET['removeID']));

        mysqli_query($connect, "DELETE FROM members WHERE email='$userID'");
        header("location: loggedout.php");
        die();
    }


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
<title>Register - Wine2Door - Wine Delivery Service</title>
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

		<!-- Reg Form -->

		<div class="col-12 login">
			<div class="form">
				<form id="form-reg" action="<?php echo $_SERVER['PHP_SELF']; ?>"
					method="post">

					<label class="col-m-6 form-label" for="username">User name:</label>
					<br /> <input class="col-m-6 form-ctrl" type="text" name="username"
						id="username" size="30" maxlength="60" required /> <label
						class="col-m-6 form-label" for="password">Password:</label> <br />
					<input class="col-m-6 form-ctrl" type="password" name="password"
						id="password" size="30" maxlength="60" required /> <label
						class="col-m-6 form-label" for="repassword">Re-Password:</label> <br />
					<input class="col-m-6 form-ctrl" type="password" name="repassword"
						id="repassword" size="30" maxlength="60" required /> <label
						class="col-m-6 form-label" for="firstname">First name:</label> <br />
					<input class="col-m-6 form-ctrl" type="text" name="firstname"
						id="firstname" size="30" maxlength="60" /> <label
						class="col-m-6 form-label" for="lastname">Last name:</label> <br />
					<input class="col-m-6 form-ctrl" type="text" name="lastname"
						id="lastname" size="30" maxlength="60" /> <label
						class="col-m-6 form-label" for="address">Address:</label> <br /> <input
						class="col-m-6 form-ctrl" type="text" name="address" id="address"
						size="30" maxlength="60" /> <br /> <input
						class="col-m-12 form-ctrl" type="submit" name="register"
						value="Register an Account" />

				</form>
				<script type="text/javascript">
 					var frmvalidator  = new Validator("form-reg");
 					frmvalidator.addValidation("username","req","Please enter your email address.");
 					frmvalidator.addValidation("username","maxlen=50","Maximum length is 50 characters.");
 					frmvalidator.addValidation("username","email","Username must be an email address.");

 					frmvalidator.addValidation("password","req","Please enter your password.");
 					frmvalidator.addValidation("password","maxlen=50","Maximum length is 50 characters.");
 					frmvalidator.addValidation("repassword","req","Please retype your password.");
 					frmvalidator.addValidation("repassword","maxlen=50","Maximum length is 50 characters.");
 					frmvalidator.addValidation("repassword","eqelmnt=password",
 					 "The confirmed password is not same as password");


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
