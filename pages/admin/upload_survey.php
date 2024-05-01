<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../../src/template/admin/upload_survey_page.php";
include "../../admin_base.php";
?>