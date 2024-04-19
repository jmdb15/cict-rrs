<?php
    session_start();
    session_destroy();
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = "You're now logged put!";
    header('Location:../landing.php');
?>