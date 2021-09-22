<?php
    error_reporting(0);
	session_start();
    
    /* Handle Errors */
	if ($_GET['error'] == 1) {
        echo 'Please fill out the form first!';
    };
	if ($_GET['error'] == 2) {
        echo 'Please fill out the form correctly!';
    };
	
    /* If signed in already, return homepage */
    if ($_SESSION['session'] == true) {
        header('Location: home.view.php');
    };
?>