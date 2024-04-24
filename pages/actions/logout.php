<?php
    session_start();
    session_destroy();
    session_start();
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = "You're now logged out!";
    header('Location:../landing.php');
?>