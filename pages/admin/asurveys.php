<?php
include ('../../db/db.php'); 

$sql = "SELECT s.*, a.email FROM surveys s JOIN account a ON s.account_id = a.number WHERE s.is_archived = 0";
$result = $conn->query($sql);

$asql = "SELECT s.*, a.email FROM surveys s JOIN account a ON s.account_id = a.number WHERE s.is_archived = 1";
$aresult = $conn->query($asql);

$scripts = "
<script>
  document.getElementById('surveys').classList.add('bg-orange-400');
  document.getElementById('surveys').firstElementChild.classList.add('brightness-100');
  document.getElementById('surveys').lastElementChild.classList.add('text-white');
</script>
";
$content_template = "src/template/admin/surveys_page.php";
include "../../admin_base.php";
?>