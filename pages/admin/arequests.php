<?php

$scripts = "
<script>
  document.getElementById('requests').classList.add('bg-orange-400');
  document.getElementById('requests').firstElementChild.classList.add('brightness-100');
  document.getElementById('requests').lastElementChild.classList.add('text-white');
</script>
";
$content_template = "src/template/admin/requests_page.php";
include "../../admin_base.php";
?>