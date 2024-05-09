<?php
session_start();
include ('../../db/db.php');

$uid = $_SESSION['id'];
$key = $_POST['key'];

$sql = "SELECT r.*, p.first_name, p.last_name, s.research_title
FROM requests r
JOIN studies s ON r.studies_id = s.id
JOIN profile p ON s.account_id = p.account_id
WHERE p.account_id = '$uid' AND
(CONCAT_WS(' ', p.first_name, p.last_name) LIKE '%$key%' OR s.research_title LIKE '%$key%')";
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