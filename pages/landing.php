<?php
session_start();
include('../db/db.php');
$sql = "SELECT * FROM studies ORDER BY id DESC LIMIT 3";
$res = $conn->query($sql);

$imports = '';
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$isLoggedIn = false;
$showNav = true;
$content_template = "../src/template/landing_page.php";
include "../base.php";
?>