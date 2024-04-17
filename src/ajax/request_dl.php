<?php
session_start();
include("../../db/db.php");

$researchId = $_POST['id'];
$uid = $_SESSION['id'];

$sql = "INSERT INTO `requests`(`status`, `studies_id`, `account_id`) VALUES (0,'$researchId','$uid')";
if($conn->query($sql)){
    insertLog($conn, $uid, 'Requested download for: '.$row['project_title'], $researchId);
    echo "Request sent.";
}else{
    echo "There was an error. Try again later.";
}
?>