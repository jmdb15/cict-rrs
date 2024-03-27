<?php

$scripts = "
<script>
  document.getElementById('dashboard').classList.add('bg-orange-400');
  document.getElementById('dashboard').firstElementChild.classList.add('brightness-100');
  document.getElementById('dashboard').lastElementChild.classList.add('text-white');
</script>
";
$content_template = "src/template/admin/admin_dashb.php";
include "../../admin_base.php";
?>