<?php
	error_reporting(0);
    require 'landing.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href='style.css'>
    <title>PHP Challenge #4</title>
</head>
<body>

    <!-- Signup Form -->
    <form id='landingLogin' action='signin.php' method="post">
        <input type=text name="username" placeholder="Enter Username">
        <input type=text name="email" placeholder="Enter Email">
        <input type=text name="password" placeholder="Enter Password">
        <input type=text name="confirmPassword" placeholder="Confirm Password">
        <button type="submit" name="submitForm">Submit</button>
    </form>
    
</body>
</html>