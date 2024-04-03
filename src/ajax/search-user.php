<?php
require_once '../../db/db.php';
$type = $_POST['type'];
$key = $_POST['key'];

$sql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE p.first_name LIKE '%$key%' OR a.number LIKE '%$key%'";
$res = $conn->query($sql);
$data = array();
while($row = $res->fetch_assoc()){
  $data[] = $row;
}

if ($res->num_rows > 0){
  echo json_encode($data);
}else{
  echo 'error';
}