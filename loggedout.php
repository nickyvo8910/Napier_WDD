<?php

//
// loggedout.php
//
session_start();
//ini_set('arg_separator.output',';');

// Kill session.  Remove signs that user is logged in.
unset($_SESSION['username']);
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Log out notice</title>
</head>

<body>

<h1>You are now logged out.</h1>

<p>
<a href="home.php">Return to login page</a>
</p>

</body>
</html>
