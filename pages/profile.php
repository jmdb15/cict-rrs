<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
include('../db/db.php');

$uid = $_SESSION['id'];
$sql = "SELECT p.*, a.email, a.type FROM profile p JOIN account a ON a.number = p.account_id WHERE p.account_id = $uid";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

$crs = $row['course'] ?? 'none';
$acad_rank = $row['academic_rank'] ?? 'none';

$imports = '';
$isLoggedIn = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$showNav = true;
$content_template = "../src/template/profile_page.php";
include "../base.php";
?>