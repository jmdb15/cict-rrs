<?php

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