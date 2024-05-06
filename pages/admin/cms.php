<?php
session_start();
if($_SESSION['type'] != 'admin') header('Location:../landing.php');
include('../../db/db.php');

$scripts = "
<script>
  document.getElementById('dashboard').classList.add('bg-orange-400');
  document.getElementById('dashboard').firstElementChild.classList.add('brightness-100');
  document.getElementById('dashboard').lastElementChild.classList.add('text-white');
</script>
";
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "src/template/admin/cms_page.php";
include "../../admin_base.php";
?>