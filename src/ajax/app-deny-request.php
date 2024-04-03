<?php
require_once("../../db/db.php");

$todo = $_POST['toDo'];
$id = $_POST['id'];

$sql = "UPDATE `requests` SET `status`='$todo', `updated_at`=NOW() WHERE id = $id";
if($conn->query($sql)){
    echo 'success';
}else{
    echo 'failed';
}

