<?php
session_start();
include "../../db/db.php";
$stud = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT a.*, p.points, p.course FROM account a JOIN profile p ON a.number = p.account_id WHERE `email`= '$stud'";
$res = $conn->query($sql);
$_SESSION['toast']['error'] = true;
if($res->num_rows > 0)
{
    $row = mysqli_fetch_assoc($res);
    $curr_pass = $row['password'];
    if(verify_password($pass, $curr_pass)){
        $_SESSION["id"] = $row['number'];
        $_SESSION["course"] = $row['course'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["fullname"] = $row['first_name'].' '.$row['last_name'];
        $_SESSION["points"] = $row['points'];
        $_SESSION['verified'] = $row['verified_at'] != null ? true : false;
        $_SESSION['toast']['error'] = false;
        $_SESSION['toast']['message'] =  $row['verified_at'] != null ? "Hello! You're now logged in. Enjoy the journey!" : "Please verify your account to continue.";
        if($row['type'] == 'admin'){
            $_SESSION['type'] = 'admin';
            header("Location:../admin/dashboard.php");
        }else{
            $_SESSION['type'] = 'user';
            insertLog($conn, $row['number'], 'Logged in');
            header("Location:../index.php");
        }
    }else{
        $_SESSION['toast']['message'] = "Wrong username or password.";
        header("Location:../landing.php");
    }
}else{  
    $_SESSION['toast']['message'] = "Wrong username or password.";
    header("Location:../landing.php");
}
?>