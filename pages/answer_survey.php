<?php
$imports = '';
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
include('../db/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `surveys` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$dateTime = new DateTime($row['created_at']);
$row['created_at'] = $dateTime->format("F j, Y");


$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/answer_survey_page.php";
include "../base.php";
?>