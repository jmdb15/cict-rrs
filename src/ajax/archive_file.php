<?php
include("../../db/db.php");
$id = $_POST['id'];
$value = $_POST['func'];
$table = $_POST['table'];
$sql = "UPDATE `$table` SET `is_archived`=$value WHERE id = '$id'";
if($conn->query($sql)){
  echo "Success";
}else{
  echo "Fail";
}
?>