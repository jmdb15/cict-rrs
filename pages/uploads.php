<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
$imports = '';
include('../db/db.php');

$uid = $_SESSION['id'];
$surveySql = "SELECT s.*, (SELECT COUNT(*) FROM response o WHERE o.account_id = s.account_id) AS responses FROM surveys s WHERE s.account_id = $uid";
$requestSql = "SELECT requests.*, profile.first_name, profile.last_name, studies.project_title
FROM requests
JOIN studies ON requests.studies_id = studies.id
JOIN profile ON studies.account_id = profile.account_id
WHERE profile.account_id = '$uid';";
$docSql = "SELECT s.*, COALESCE(view_count, 0) AS view_count FROM studies s 
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
            WHERE s.account_id='$uid'";

$docResult = $conn->query($docSql);
$surveyResult = $conn->query($surveySql);
$requestResult = $conn->query($requestSql);


$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/uploads_page.php";
include "../base.php";
