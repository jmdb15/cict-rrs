<?php
$imports = '<link rel="stylesheet" href="../src/css/signup.css">';
include('../db/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `studies` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$showNav = true;
$content_template = "../src/template/view_pdf_page.php";
include "../base.php";
?>