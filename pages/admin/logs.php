<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$asql = "SELECT l.*, p.* FROM logs l LEFT JOIN profile p ON l.account_id = p.account_id";
$result = $conn->query($asql);

$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../../src/template/admin/logs_page.php";
include "../../admin_base.php";
?>