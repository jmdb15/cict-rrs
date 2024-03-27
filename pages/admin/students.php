<?php

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