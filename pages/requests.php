<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}
$imports = '';
include('../db/db.php');

$id = $_SESSION['id'];
$requestSql = "SELECT * FROM `requests` WHERE account_id=$id";
$requestResult = $conn->query($requestSql);

if($requestResult->num_rows > 0){   
    $data = array();
    while($row = $requestResult->fetch_assoc()){ 
        $dateTime = new DateTime($row['created_at']);
        $row['created_at'] = $dateTime->format("F j, Y"); 
        $rowId = $row['studies_id'];
        $titleSql = "SELECT * FROM studies WHERE id=$rowId";
        $titleRes = $conn->query($titleSql);
        $titleRow = $titleRes->fetch_assoc();
        $row['research_title'] = $titleRow['research_title'];
        $data[] = $row;
    }
}

// print_r($data);

$isLoggedIn = true;
$showNav = true;
$content_template = "../src/template/requests_page.php";
include "../base.php";
?>