<?php
session_start();
include ('../../db/db.php');

$uid = $_SESSION['id'];
$key = $_POST['key'];

$sql = "SELECT * FROM `studies` WHERE account_id=$uid AND research_title LIKE '%$key%'";
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