<?php
session_start();
require_once('../../db/db.php');

$uid = $_SESSION['id'];
$sql = "SELECT * FROM account WHERE `number`=$uid";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$curr_pass = $row['password'];

$old = $_POST['oldPass'];
$new = $_POST['newPass'];
$conf = $_POST['confpass'];

$_SESSION['toast']['error'] = false;

if(verify_password($old, $curr_pass)){
    $hashed_new_password = generate_hash($new);
    $sql_change = "UPDATE `account` SET `password`='$hashed_new_password' WHERE `number`=$uid";
    if($conn->query($sql_change)){
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = 'Changes have been saved successfully!';
        $_SESSION['toast']['logout'] = true;
        echo 'success';
    }else{
        $_SESSION['toast']['message'] = 'Something went wrong! Please try again later.';
        echo 'fail';
    }
}else{
    $_SESSION['toast']['message'] = 'Wrong password. Please try again.';
    echo 'fail';
}