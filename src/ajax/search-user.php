<?php
require_once '../../db/db.php';
$type = $_POST['type'];
$key = $_POST['key'];
$is_archived = $_POST['is_archived'];

$sql = "SELECT a.*, p.* FROM account a JOIN profile p ON a.number = p.account_id WHERE a.type = '$type' AND is_archived=$is_archived AND (CONCAT_WS(' ', p.first_name, p.middle_name, p.last_name) LIKE '%$key%' OR a.number LIKE '%$key%' OR a.email LIKE '%$key%')";
$res = $conn->query($sql);
$data = array();
while($row = $res->fetch_assoc()){
  $data[] = $row;
}

if ($res->num_rows > 0){
  echo json_encode($data);
}else{
  echo 'none';
}