<?php
session_start();
include ('../../db/db.php');

$uid = $_SESSION['id'];
$key = $_POST['key'];

$sql = "SELECT s.*, (SELECT COUNT(*) FROM response o WHERE o.account_id = s.account_id AND survey_name LIKE '%$key%') AS responses FROM surveys s WHERE s.account_id = $uid AND survey_name LIKE '%$key%'";
$res = $conn->query($sql);
if($res->num_rows > 0){
  $data = array();
  while($row = $res->fetch_assoc()){
    $dateTimee = new DateTime($row['created_at']);
    $row['created_at'] = $dateTimee->format("F j, Y");    
    $data[] = $row;
  }
  echo json_encode($data);
}else echo 'null';