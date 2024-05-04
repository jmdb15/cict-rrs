<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include ('../../db/db.php'); 

$psql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE s.is_archived = 0 AND s.is_approved = 0";
$presult = $conn->query($psql);

$sql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE s.is_archived = 0 AND s.is_approved = 1";
$result = $conn->query($sql);

$asql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE s.is_archived = 1 OR s.is_approved = -1";
$aresult = $conn->query($asql);

$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../../src/template/admin/files_page.php";
include "../../admin_base.php";
?>