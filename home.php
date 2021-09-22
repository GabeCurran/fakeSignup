<?php
    session_start();
    if ($_SESSION['session'] == false) {
        header('Location: landing.view.php');
    };
?>