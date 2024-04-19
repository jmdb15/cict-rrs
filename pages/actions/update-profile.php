<?php
session_start();
include('../../db/db.php');

$uid = $_SESSION['id'];
$fname = $_POST['first_name'];
$mname = $_POST['middle_name'];
$lname = $_POST['last_name'];
$course = $_POST['course'];
$year = $_POST['year'];
$specs = $_POST['specs'];
$section = $_POST['section'];
$sex = $_POST['sex'];

$sql = "UPDATE `profile` SET `first_name`='$fname',`middle_name`='$mname',`last_name`='$lname',`course`='$course',`specialization`='$specs',`year`='$year',`section`='$section',`sex`='$sex' WHERE account_id='$uid'";
if($conn->query($sql)){
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = 'Changes have been saved successfully.';
}else{
    $_SESSION['toast']['error'] = true;
    $_SESSION['toast']['message'] = 'Something went wrong. Please try again later.';
}

header('Location:../profile.php');