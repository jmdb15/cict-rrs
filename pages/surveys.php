<?php
session_start();
if (!isset($_SESSION["id"])) header("Location:landing.php");
if(!$_SESSION['verified']) header("Location:verify.php");
$imports = '';
include('../db/db.php');

$uid = $_SESSION['id'];

// $id = $_GET['id'];
$sql = "SELECT s.*, a.email FROM surveys s JOIN account a ON s.account_id = a.number LEFT JOIN response r ON s.id = r.survey_id AND r.account_id = $uid WHERE s.deadline >= CURDATE() AND s.is_archived = 0 AND r.survey_id IS NULL AND s.account_id != $uid";
$result = $conn->query($sql);
$i = 0;
$data = array();
while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $countSql = "SELECT COUNT(*) as total_response FROM response WHERE survey_id=$id";
    $countRes = $conn->query($countSql);
    $countRow = $countRes->fetch_assoc();
    $row['total_respondents'] = $countRow['total_response'];
    $dateTime = new DateTime($row['created_at']);
    $row['created_at'] = $dateTime->format("F j, Y");
    $data[] = $row;
    // $id = $row['id'];
    // $countSql = "SELECT COUNT(*) as respondents FROM respondents WHERE survey_id = '$id'";
    // $countRes = $conn->query($countSql);
    // $countRow = $countRes->fetch_assoc();
    // $row['respondents'] = $countRow['$respondents'];
    
};

$isLoggedIn = true;
$showNav = true;
$sessionMessage = $_SESSION['toast']['message'] ?? '';
$content_template = "../src/template/surveys_page.php";
include "../base.php";
?>"