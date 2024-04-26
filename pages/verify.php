<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if($_SESSION['verified']) header("Location:index.php");

$imports = '';
$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/verify_page.php";
include "../base.php";
?>