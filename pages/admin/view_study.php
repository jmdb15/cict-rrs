<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM `studies` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$dateTime = new DateTime($row['created_at']);
$row['created_at'] = $dateTime->format("F j, Y");

$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "src/template/admin/view_study_page.php";
include "../../admin_base.php";