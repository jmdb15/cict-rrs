<?php
session_start();
include('../../db/db.php');

$uid = $_SESSION['id'];
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'] ?? '';
$lname = $_POST['last_name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$sql = "";
// echo $_SESSION['acc_type'];
if($_SESSION['acc_type'] == 'faculty'){
    $rank = $_POST['acad_rank'];
    $sql = "UPDATE `profile` SET `first_name`='$fname',`middle_name`='$mname',`last_name`='$lname',`academic_rank`='$rank',`sex`='$sex' WHERE account_id='$uid'";
}else{
    $course = $_POST['course'];
    $year = $_POST['year'];
    $specs = $_POST['specs'];
    $section = $_POST['section']; 
    $sql = "UPDATE `profile` SET `first_name`='$fname',`middle_name`='$mname',`last_name`='$lname',`course`='$course',`specialization`='$specs',`year`='$year',`section`='$section',`sex`='$sex' WHERE account_id='$uid'";
}

// $sql = "UPDATE `profile` SET `first_name`='$fname',`middle_name`='$mname',`last_name`='$lname',`academic_rank`='$rank',`course`='$course',`specialization`='$specs',`year`='$year',`section`='$section',`sex`='$sex' WHERE account_id='$uid'";
if($conn->query($sql)){
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = 'Changes have been saved successfully.';
}else{
    $_SESSION['toast']['error'] = true;
    $_SESSION['toast']['message'] = 'Something went wrong. Please try again later.';
}

header('Location:../profile.php');