<?php
include("../../db/db.php");
$id = $_POST['id'];
$value = $_POST['func'];
$sql = "UPDATE `studies` SET `is_archived`=$value WHERE id = '$id'";
if($conn->query($sql)){
  echo "Success";
}else{
  echo "Fail";
}
?>