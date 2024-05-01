<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$sql = "SELECT 
COUNT(*) AS studies_row,
(SELECT COUNT(*) FROM surveys) AS surveys_row,
(SELECT COUNT(*) FROM requests) AS request_row,
(SELECT COUNT(*) FROM account WHERE type != 'admin') AS user_row
FROM 
studies;";
$res = $conn->query($sql);
$row = $res->fetch_assoc();

$scripts = "
<script>
  document.getElementById('dashboard').classList.add('bg-orange-400');
  document.getElementById('dashboard').firstElementChild.classList.add('brightness-100');
  document.getElementById('dashboard').lastElementChild.classList.add('text-white');
</script>
";
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "src/template/admin/admin_dashb.php";
include "../../admin_base.php";
?>