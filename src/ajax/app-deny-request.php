<?php
require_once("../../db/db.php");
require_once("emailer.php");
require_once("dl-emailer.php");

$todo = $_POST['toDo'];
$id = $_POST['id'];
$isAdmin = $_POST['is_admin'];
$sendEmailSql = "SELECT r.*, a.email, s.*, p.first_name as fn, p.last_name as ln FROM requests r JOIN studies s ON r.studies_id = s.id JOIN account a ON r.account_id = a.number JOIN profile p ON r.account_id=p.account_id WHERE r.id = $id";
$res = $conn->query($sendEmailSql);
$row = $res->fetch_assoc();
$email = $row['email'];
$title = $row['research_title'];
$subject = ($todo == 1) 
            ? "Download Request Approved"
            : "Download Request Declined";
$body = ($todo == 1) 
            ? "Your request for '$title' has been approved! You can now download and view the paper."
            : "Your request for '$title' has been declined! We're sorry."; 
$userFilePath = ($isAdmin) 
            ? "../../public/pdfs/".$row['file'] 
            : "../public/pdfs/".$row['file'];
$filePath = ($todo == 1) 
            ? $userFilePath
            : "";
if($todo == 1){
    $name = $row['fn'] . ' ' . $row['ln'];
    sendFileWithWatermark($name, $email, $subject, $body, $filePath);
}else{
    sendEmail([$email], $subject, $body);
}

$sql = "UPDATE `requests` SET `status`='$todo', `updated_at`=NOW() WHERE id = $id";
if($conn->query($sql)){
    echo 'success';
}else{
    echo 'failed';
}

