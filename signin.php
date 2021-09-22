<?php
    error_reporting(0);
	session_start();
	if (isset($_POST['submitForm'])) {
		if
                /* Check for empty values and prevent injection */
                (htmlspecialchars($_POST['password']) == htmlspecialchars($_POST['confirmPassword']) &&
                !empty(htmlspecialchars($_POST['username'])) && 
				!empty(htmlspecialchars($_POST['email'])) && 
				!empty(htmlspecialchars($_POST['password'])) && 
				!empty(htmlspecialchars($_POST['confirmPassword'])) && 

                /* Check for whitespace */
				!ctype_space(htmlspecialchars($_POST['username'])) && 
				!ctype_space(htmlspecialchars($_POST['email'])) && 
				!ctype_space(htmlspecialchars($_POST['password'])) && 
				!ctype_space(htmlspecialchars($_POST['confirmPassword'])))

                /* Define user session variables */
                {$_SESSION['username'] = htmlspecialchars($_POST['username']);
                $_SESSION['email'] = htmlspecialchars($_POST['email']);
                $_SESSION['password'] = htmlspecialchars($_POST['password']);
                $_SESSION['confirmPassword'] = htmlspecialchars($_POST['confirmPassword']);
                $_SESSION['session'] = true;

                /* Redirect to homepage */
                header('Location: home.view.php');
                exit();

            /* If input is misformatted, return same page */
            } else header('Location: landing.view.php?error=2');
            } else header('Location: landing.view.php?error=1');
?>