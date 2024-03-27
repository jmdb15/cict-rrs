<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}
$imports = '';
include('../db/db.php');

$id = $_SESSION['id'];
$docSql = "SELECT * FROM `studies` WHERE id=$id";
$surveySql = "SELECT s.*, (SELECT COUNT(*) FROM response o WHERE o.account_id = s.account_id) AS responses FROM surveys s WHERE s.account_id = $id";

$docResult = $conn->query($docSql);
$surveyResult = $conn->query($surveySql);


$isLoggedIn = true;
$showNav = true;
$content_template = "../src/template/uploads_page.php";
include "../base.php";
?>