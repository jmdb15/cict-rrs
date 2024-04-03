<?php
require_once '../../db/db.php';

$sql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE a.is_archived = 0 AND type = 'faculty'";
$result = $conn->query($sql);

$asql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE a.is_archived = 1 AND type = 'faculty'";
$aresult = $conn->query($asql);

$content_template = "src/template/admin/faculties_page.php";
include "../../admin_base.php";
?>