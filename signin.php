<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location: home.php");
    die();
}

$server = '40452569@wdd.napier.ac.uk';
$database = '40452569';
$username = '40452569';
$password = 'dUptbimB';

$connect = mysqli_connect($server, $username, $password, $database);

// process-login-form.php
// ----------------------

// If "login"button pressed, check database for credentials.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {

        $username = ''; // Reset all variables
        $password = '';

        // if (!empty($_POST['username'])){
        $username = test_input($_POST["username"]);
        // }
        // if (!empty($_POST['password'])){
        $password = test_input($_POST["password"]);
        // }

        // Are there any matches in the database?
        $query = "select * from members where email='$username' and password='$password'";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result); // number of matches

        // If there are matches, then set 'username' in the 'session[]' array to non-zero.
        // This is how the 'privelige' pages know that somebody is logged in.
        // The header command will not work if an html page has already started

        if ($num > 0) {
            $_SESSION['username'] = $username;
            header("location: home.php");
            die();
        } else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
    }
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
<title>Sign In - Wine2Door - Wine Delivery Service</title>
<meta http-equiv="Content-Type" content="charset=UTF-8" />
<link rel="stylesheet" href="css\main.css" type="text/css">
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

		<!-- Signin Form -->

		<div class="col-12 login">
			<div class="form">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<p>
						<label class="col-m-6 form-label" for="name">User name:</label> <br />
						<input class="col-m-6 form-ctrl" type="text" name="username"
							id="username" size="60" maxlength="60" required />
					</p>
					<p>
						<label class="col-m-6 form-label" for="password">Password:</label>
						<br /> <input class="col-m-6 form-ctrl" type="password"
							name="password" id="password" size="60" maxlength="60" required />
						<br />

					</p>
					<input class="col-m-12 form-ctrl" type="submit" name="login"
						value="Sign In" />
				</form>
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
