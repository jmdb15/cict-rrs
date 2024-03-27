<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}

$imports = '';
$isLoggedIn = true;
$showNav = true;
$content_template = "../src/template/profile_page.php";
include "../base.php";
?>