<?php
    session_start();
    include("../db/db.php");
    $email = $_SESSION['email'];
    $sql = "UPDATE `account` SET `verified_at`= NOW() WHERE email = '$email'";
    if($conn->query($sql)){
        echo "Verified! Go back to <a href='index.php'>home</a>.";
    }
?>