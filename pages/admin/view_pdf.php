<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `studies` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$file = $row['file'];

$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "src/template/admin/view_pdf_page.php";
include "../../admin_base.php";