<?php
include("emailer.php");
if(isset($_POST)){
    $email = $_POST['email'];
    // $email = 'jemuel.banag.d@bulsu.edu.ph';
}

$subject = 'Verification Email';
$body = 'Click the following link to verify your account: <a href="localhost/CICT_RRS_FINAL/pages/verify.php">Verify Account.</a>';

echo $email;
// sendEmail([$email], $subject, $body);
?>