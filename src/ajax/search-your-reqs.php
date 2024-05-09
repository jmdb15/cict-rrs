<?php
session_start();
include ('../../db/db.php');

$uid = $_SESSION['id'];
$key = $_POST['key'];
$selectedFilter = $_POST['selectedFilter'];
$filterCode = $selectedFilter == 'pending' ? 0 : ($selectedFilter == 'approved'  ? 1 : -1);

$sql = "SELECT s.research_title, r.* FROM requests r JOIN studies s ON s.id=r.studies_id WHERE r.status = $filterCode AND r.account_id='$uid' AND s.research_title LIKE '%$key%')";
$res = $conn->query($sql);
// $row = $res->fetch_assoc();
if($res->num_rows > 0){
  $data = array();
  while($row = $res->fetch_assoc()){
    $dateTimee = new DateTime($row['created_at']);
    $row['created_at'] = $dateTimee->format("F j, Y");    
    $data[] = $row;
  }
  echo json_encode($data);
}else echo 'null';