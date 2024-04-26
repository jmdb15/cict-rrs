<?php

if(isset($_POST['reset'])){
    include "../db/db.php";
    $token = $_POST['token'];
    $sql1 = "SELECT * FROM account WHERE reset_token='$token' and reset_expiration > NOW()";
    $res1 = $conn->query($sql1);
    if($res1->num_rows > 0){
        while($row1 = $res1->fetch_assoc()){
            if( $token == $row1['reset_token']){
                $pass = $_POST['password'];
                $conf = $_POST['confirm'];
                if($pass == $conf){
                    $hash = generate_hash($pass);
                    $sql = "UPDATE `account` SET `password`='$hash', `reset_token`=null, `reset_expiration`=null WHERE id = '". $row1['id'] ."'";
                    $res = $conn->query($sql);
                    $_SESSION['toast']['error'] = false;
                    $_SESSION['toast']['message'] = "You're password has been changed! Try logging in now.";
                    header ('landing.php');
                }
            }else{
                $_SESSION['toast']['error'] = true;
                $_SESSION['toast']['message'] = "Something wnet wrong, please try again later.";
                header ('landing.php');
            }
        }   
    }else{
        $row = $res1->fetch_assoc();
        $sql = "UPDATE `account` SET `reset_token`=null, `reset_expiration`=null WHERE id = '". $row['id'] ."'";
        $res = $conn->query($sql);
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = "Your token has expired. Please try again later.";
        header ('landing.php');
    }
}

$imports = '';
$isLoggedIn = false;
$showNav = false;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/reset_password_page.php";
include "../base.php";