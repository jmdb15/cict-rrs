<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
$imports = '';
include('../db/db.php');

$id = $_SESSION['id'];
$docSql = "SELECT * FROM `studies` WHERE id=$id";
$surveySql = "SELECT s.*, (SELECT COUNT(*) FROM response o WHERE o.account_id = s.account_id) AS responses FROM surveys s WHERE s.account_id = $id";
$requestSql = "SELECT requests.*, profile.first_name, profile.last_name, studies.project_title
FROM requests
JOIN studies ON requests.studies_id = studies.id
JOIN profile ON studies.account_id = profile.account_id
WHERE profile.account_id = '$id';";

$docResult = $conn->query($docSql);
$surveyResult = $conn->query($surveySql);
$requestResult = $conn->query($requestSql);


$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/uploads_page.php";
include "../base.php";
