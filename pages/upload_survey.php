<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}
$imports = '';
// include('../db/db.php');

// $id = $_GET['id'];
// $sql = "SELECT * FROM `studies` WHERE id=$id";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();

$isLoggedIn = true;
$showNav = true;
$content_template = "../src/template/upload_survey_pagec.php";
include "../base.php";
?>