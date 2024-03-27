<?php 
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}

    include("../db/db.php");
    $name = $_POST["survey-name"];
    $url = $_POST["url"] ?? '';
    $respondents = $_POST["respondents"];
    $description = $_POST["description"];
    $deadline = $_POST["deadline"];
    $uploader = $_SESSION['id'];
    $upload_date = $_POST["upload_date"];
    $surveyFile = $_POST['filename'];

    $sql = "INSERT INTO `surveys`(`survey_name`, `respondents`, `url`, `description`, `account_id`, `deadline`, `filename`) VALUES ('$name', '$respondents', '$url', '$description', '$uploader', '$deadline', '$surveyFile')";
    mysqli_query($conn, $sql);
    header("Location:surveys.php");
?>