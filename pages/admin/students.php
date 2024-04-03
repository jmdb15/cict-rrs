<?php
require_once ('../../db/db.php');

$sql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE a.is_archived = 0 AND type = 'student'";
$result = $conn->query($sql);

$asql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE a.is_archived = 1 AND type = 'student'";
$aresult = $conn->query($asql);

$scripts = "
<script>
  document.getElementById('users').classList.add('bg-orange-400');
  document.getElementById('users').firstElementChild.classList.add('brightness-100');
  document.getElementById('users').lastElementChild.classList.add('text-white');
</script>
";
$content_template = "src/template/admin/students_page.php";
include "../../admin_base.php";
?>