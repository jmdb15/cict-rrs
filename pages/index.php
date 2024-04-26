<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
require_once('../db/db.php');
$uid = $_SESSION['id'];

$sql = "SELECT 
s.id, 
s.cover, 
s.project_title, 
s.research_title, 
COALESCE(view_count, 0) AS view_count
FROM 
studies s
LEFT JOIN 
(SELECT 
    studies_id, 
    COUNT(id) AS view_count 
 FROM 
    logs 
 WHERE 
    activity LIKE '%Viewed%' 
 GROUP BY 
    studies_id) AS viewed_logs 
ON 
s.id = viewed_logs.studies_id
ORDER BY 
view_count DESC, 
s.created_at DESC
LIMIT 3;
";
$res = $conn->query($sql);

$previousSql = "SELECT l.*, s.* FROM logs l LEFT JOIN studies s ON l.studies_id=s.id WHERE l.account_id='$uid' AND l.studies_id != '' AND l.activity LIKE '%Viewed%'";
$previousRes = $conn->query($previousSql);

$imports = '';
$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/index_page.php";
include "../base.php";
?>