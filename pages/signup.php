<?php
include ("../db/db.php");
$num = $_POST['number'];
$email = $_POST['email'];
$type = $_POST['type'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
if($pass == $pass2){
    $hashed_password = generate_hash($pass);
    $sql = "INSERT INTO `account` (`number`,`email`, `type`, `password`) VALUES ('$num','$email', '$type', '$hashed_password')";
    if($conn->query($sql)){
        session_start();
        $_SESSION["id"] = $num;
        $_SESSION["email"] = $email;
        insertLog($conn, $num, 'Logged in');
        header ("Location:index.php");
    }else{
        echo 'Something went wrong.';
    }
}
?>