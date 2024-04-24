<?php
session_start();

$imports = '';
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$isLoggedIn = false;
$showNav = true;
$content_template = "../src/template/landing_page.php";
include "../base.php";
?>