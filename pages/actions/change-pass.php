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

if(verify_password($old, $curr_pass)){
    $hashed_new_password = generate_hash($new);
    $sql_change = "UPDATE `account` SET `password`='$hashed_new_password' WHERE `number`=$uid";
    if($conn->query($sql_change)){
        echo 'Password changed!';
    }else{
        echo 'Password was not changed! Please try again.';
    }
}else{
    echo 'Wrong password. Please try again.';
}