<?php
session_start();
include('../../db/db.php');

$id = $_GET['id'];
$uid = $_SESSION['id'];
$email = $_SESSION['email'];
$code = $_POST['code'];
$inputCode = $_POST['code-verification'];

if($code == $inputCode){
    $sql = "INSERT INTO `response`(`account_id`, `survey_id`) VALUES ('$uid','$id')";
    if($conn->query($sql)){
        insertLog($conn, $uid, 'Responded on a Survey: '.$surveyName);
        $sqlp = "UPDATE profile SET points = points + 1 WHERE account_id = $uid;";  
        $conn->query($sqlp);
        $_SESSION['points'] = $_SESSION['points']+1;
        $_SESSION['toast']['error'] = false;
        $_SESSION['toast']['message'] = "Thank you for your response. Here's a point for your effort!";
    }else{
        $_SESSION['toast']['error'] = true;
        $_SESSION['toast']['message'] = "There was a problem saving your response. Please try again later.";
    }
    header("Location:../surveys.php");
}else{
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = "You have entered a wrong code, please try again!";
    header("Location:../answer_survey.php?id=".$id);
}

