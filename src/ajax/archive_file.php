<?php
include("../../db/db.php");
$id = $_POST['id'];
$value = $_POST['func'];
$table = $_POST['table'];
$bsql = "SELECT * FROM `$table` WHERE id=$id";
$res = $conn->query($bsql);
$row = $res->fetch_assoc();

if($value == 0 && $row['is_approved'] == 1) $sql = "UPDATE `$table` SET `is_archived`=$value WHERE id=$id";
else if($value == 0 && $row['is_approved'] == -1) $sql = "UPDATE `$table` SET `is_archived`=$value, `is_approved`=0 WHERE id=$id";
else $sql = "UPDATE `$table` SET `is_archived`=$value WHERE id = $id";
if($conn->query($sql)){
  echo "Success";
}else{
  echo "Fail";
}
?>