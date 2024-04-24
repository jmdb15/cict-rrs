<?php
include ("../../db/db.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num = $_POST['number'];
$email = $_POST['email'];
$type = $_POST['type'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];
if($pass == $pass2){
    $hashed_password = generate_hash($pass);
    $sql = "INSERT INTO `account` (`number`,`email`, `type`, `password`) VALUES ('$num','$email', '$type', '$hashed_password')";
    $sql2 = "INSERT INTO `profile`(`account_id`, `first_name`, `last_name`) VALUES ('$num', '$fname', '$lname')";
    if($conn->query($sql)){
        $conn->query($sql2);
        session_start();
        $_SESSION["id"] = $num;
        $_SESSION["email"] = $email;
        $_SESSION['points'] = 0;
        $_SESSION['toast']['error'] = false;
        $_SESSION['toast']['message'] = "Hello! You're now logged in. Enjoy the journey!";
        insertLog($conn, $num, 'Logged in');
        header ("Location:../index.php");
    }else{
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = "An error occured while creating your account. Please try again later.";
        header ("Location:../landing.php");
    }
}
?>