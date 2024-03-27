<?php
include("emailer.php");
include('../../db/db.php');
if(isset($_POST)){
    $email = $_POST['email'];
}
$token = generateToken();
    
$sql = "UPDATE `account` SET `reset_token`='$token', `reset_expiration`=DATE_ADD(NOW(), INTERVAL 1 MINUTE) WHERE email = '$email'";
$conn->query($sql);

$subject = 'Password Reset Request';
$body = 'Click the following link to reset your password: <a href="localhost/CICT_RRS_FINAL/pages/reset_password.php?token=' . urlencode($token) . '">Reset Password</a>';

sendEmail([$email], $subject, $body);
?>