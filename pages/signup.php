<?php
include ("../db/db.php");
$num = $_POST['number'];
$email = $_POST['email'];
$type = $_POST['type'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
if($pass == $pass2){
    $hash = md5( $_POST['password']);
    $sql = "INSERT INTO `account` (`number`,`email`, `type`, `password`) VALUES ('$num','$email', '$type', '$hash')";
    if($conn->query($sql)){
        session_start();
        $_SESSION["id"] = $num;
        $_SESSION["email"] = $email;
        header ("Location:index.php");
    }else{
        echo 'Something went wrong.';
    }
}
?>