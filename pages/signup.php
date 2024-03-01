<?php

$imports = '<link rel="stylesheet" href="../src/css/signup.css">';

if(isset($_POST['submit'])){
    include ("../db/db.php");
    $num = $_POST['student_no'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $pass = $_POST['password2'];
    $pass2 = $_POST['password2'];
    if($pass == $pass2){
        $hash = md5( $_POST['password']);
        $sql = "INSERT INTO `account` (`number`,`email`, `type`, `password`) VALUES ('$num','$email', '$type', '$hash')";
        if($conn->query($sql)){
            header ("Location: index.php");
        }else{
            echo 'Something went wrong.';
        }
    }
}

// $showNav = true;
$content_template = "../src/template/signup_page.php";
include "../base.php";
?>