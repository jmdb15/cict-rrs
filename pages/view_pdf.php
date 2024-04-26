<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
$imports = '';
include('../db/db.php');

$uid = $_SESSION['id'];
$id = $_GET['id'];
$sql = "SELECT * FROM `studies` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$file = $row['file'];

insertLog($conn, $uid, 'Viewed a Research: '.$row['project_title'], $id);

$isLoggedIn = true;
$showNav = true;
$content_template = "../src/template/view_pdf_page.php";
include "../base.php";
?>