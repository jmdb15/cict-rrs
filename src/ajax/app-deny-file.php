<?php
session_start();
include('../../db/db.php');
$id = $_POST['id'];
$action = $_POST['action'];

if($action == 1) $sql = "UPDATE `studies` SET `is_approved`=$action WHERE id=$id";
else $sql = "UPDATE `studies` SET `is_approved`=$action WHERE id=$id";
if($conn->query($sql)) echo 'success';
else echo 'failed';