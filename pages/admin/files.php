<?php
include ('../../db/db.php'); 

$sql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE is_archived = 0";
$result = $conn->query($sql);

$asql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE is_archived = 1";
$aresult = $conn->query($asql);

// $archivedSql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number";
// $archivedResult = $conn->query($sql);

$content_template = "../../src/template/admin/files_page.php";
include "../../admin_base.php";
?>