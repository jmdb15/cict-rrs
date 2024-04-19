<?php
session_start();
require_once('../../db/db.php');

$uid = $_SESSION['id'];
$sql = "SELECT * FROM account WHERE `number`=$uid";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$curr_pass = $row['password'];

$old = $_POST['old_password'];
$new = $_POST['new_password'];
$conf = $_POST['conf_password'];

$_SESSION['toast']['error'] = false;

if(verify_password($old, $curr_pass)){
    $hashed_new_password = generate_hash($new);
    $sql_change = "UPDATE `account` SET `password`='$hashed_new_password' WHERE `number`=$uid";
    if($conn->query($sql_change)){
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = 'Password changed! You will now be logged out.';
        $_SESSION['toast']['logout'] = true;
    }else{
        $_SESSION['toast']['message'] = 'Something went wrong! Please try again later.';
    }
}else{
    $_SESSION['toast']['message'] = 'Wrong password. Please try again.';
}

header('Location:../profile.php');