<?php
include('../../db/db.php');

$asql = "SELECT l.*, p.* FROM logs l LEFT JOIN profile p ON l.account_id = p.account_id";
$result = $conn->query($asql);

$content_template = "../../src/template/admin/logs_page.php";
include "../../admin_base.php";
?>