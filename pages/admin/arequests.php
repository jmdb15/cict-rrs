<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include ('../../db/db.php'); 

$sql = "SELECT r.*, s.project_title, a.email FROM requests r JOIN studies s ON r.studies_id = s.id JOIN account a ON r.account_id = a.number WHERE status = 0";
$result = $conn->query($sql);

$tsql = "SELECT r.*, s.project_title, a.email FROM requests r JOIN studies s ON r.studies_id = s.id JOIN account a ON r.account_id = a.number WHERE status != 0";
$tresult = $conn->query($tsql);

$scripts = "
<script>
  document.getElementById('requests').classList.add('bg-orange-400');
  document.getElementById('requests').firstElementChild.classList.add('brightness-100');
  document.getElementById('requests').lastElementChild.classList.add('text-white');
</script>
";
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "src/template/admin/requests_page.php";
include "../../admin_base.php";
?>