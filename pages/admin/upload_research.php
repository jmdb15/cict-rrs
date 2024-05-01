<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$imports = '
<link rel="stylesheet" href="../../src/css/upload_res.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">            
';
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../../src/template/admin/upload_research_page.php";
include "../../admin_base.php";
?>