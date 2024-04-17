<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}
include('../db/db.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM studies WHERE account_id=$id ORDER BY id DESC";
$res = $conn->query($sql);


$imports = '
<link rel="stylesheet" href="../src/css/upload_res.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">            
';
$showNav = true;
$isLoggedIn = true;
$content_template = "../src/template/upload_research_page.php";
include "../base.php";
