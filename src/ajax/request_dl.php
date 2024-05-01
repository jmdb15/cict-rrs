<?php
session_start();
include("../../db/db.php");

$researchId = $_POST['id'];
$uid = $_SESSION['id'];
$points = $_SESSION['points'];
$iSql = "SELECT COUNT(*) as count FROM logs WHERE account_id='$uid' AND studies_id=$researchId AND activity LIKE 'Requested%'";
$iRes = $conn->query($iSql);

if($iRes->num_rows > 0){
    $countSql = "SELECT COUNT(*) as count FROM logs WHERE account_id='$uid' AND activity LIKE 'Requested%'";
    $getCountRes = $conn->query($countSql);
    $countRow = $getCountRes->fetch_assoc();
    
    if($points > $countRow['count']){
        $getSql = "SELECT project_title FROM studies WHERE id = $researchId";
        $getRes = $conn->query($getSql);
        $row = $getRes->fetch_assoc();
        
        $sql = "INSERT INTO `requests`(`status`, `studies_id`, `account_id`) VALUES (0,'$researchId','$uid')";
        if($conn->query($sql)){
            insertLog($conn, $uid, 'Requested download for: '.$row['project_title'], $researchId);
            echo "Request sent.";
        }else{
            echo "An error occured, please try again later.";
        }
    }else{
        echo 'Insufficient points.'; 
    }
}else{
    echo 'You already made a request';
}
?>