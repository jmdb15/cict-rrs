<?php 
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:../landing.php");
}

  include("../../db/db.php");
  $name = $_POST["survey-name"];
  $url = $_POST["url"] ?? '';
  $respondents = $_POST["respondents"];
  $description = $_POST["description"];
  $deadline = $_POST["deadline"];
  $uploader = $_SESSION['id'];
  $upload_date = $_POST["upload-date"];
  $surveyFile = $_POST['filename'];

  $sql = "INSERT INTO surveys(survey_name, respondents, url, description, account_id, deadline, filename) VALUES('$name', '$respondents', '$url', '$description', '$uploader', '$deadline', '$surveyFile')";

  $_SESSION['toast']['error'] = true;
  if($conn->query($sql)){
    insertLog($conn, $uploader, 'Uploaded a Survey: '.$name);
    $_SESSION['toast']['error'] = false;
    $_SESSION['toast']['message'] = "Your survey is now saved.";
  }else{
    $_SESSION['toast']['message'] = "Hello! You're now logged in. Enjoy the journey!";
  }
  if($_SESSION['type'] == 'admin') header("Location:../admin/asurveys.php");
  else header("Location:../surveys.php");
?>