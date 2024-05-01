<?php
include('../../db/db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM studies WHERE id=$id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$file_path = "../../public/pdfs/".$row['file'];

header('Content-Description: File Transfer');
header('Content-Type: application/pdf'); // PDF MIME type
header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file_path));
// Read the file and output its contents
readfile($file_path);
// header('Location:view_study.php?id='.$id);