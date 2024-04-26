<?php
    session_start();
    include("../../db/db.php");
    $email = $_SESSION['email'];
    $sql = "UPDATE `account` SET `verified_at`= NOW() WHERE email = '$email'";
    if($conn->query($sql)){
        $_SESSION['verified'] = true;
        $_SESSION['toast']['error'] = false;
        $_SESSION['toast']['message'] = "Hello! You're a verified user now. Enjoy the journey!";
        header ('../index.php');
    }else{
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = "Something went wrong. Please try again later";
        header ('../verify.php');
    }
?>