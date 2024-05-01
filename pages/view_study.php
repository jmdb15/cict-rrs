<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
$imports = '';
include('../db/db.php');

$uid = $_SESSION['id'];
$id = $_GET['id'];
//Query to get the research info
$sql = "SELECT * FROM `studies` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//change format date
$dateTime = new DateTime($row['created_at']);
$row['created_at'] = $dateTime->format("F j, Y");

//Query to disable request button
$iSql = "SELECT COUNT(*) as count FROM logs WHERE account_id='$uid' AND studies_id=$id AND activity LIKE 'Requested%'";
$iRes = $conn->query($iSql);
$iRow = $iRes->fetch_assoc();
if($iRow['count'] >= $_SESSION['points']) $btnDisable = true;
else $btnDisable = false; 

$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/view_study2.php";
include "../base.php";
?>