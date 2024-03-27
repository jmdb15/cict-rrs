<?php
session_start();
if (!isset($_SESSION["id"])) {
  header("Location:landing.php");
}
include('../db/db.php');
use function PHPSTORM_META\type;
$id = $_SESSION['id'];
$sql = "SELECT * FROM studies WHERE account_id=$id ORDER BY id DESC";
$res = $conn->query($sql);

if(isset($_POST['project-title'])){
    include('../db/db.php');
    $pTitle = $_POST['project-title'];
    $rTitle = $_POST['research-title'];
    $author = $_POST['authors'];
    $panel = $_POST['panels'];
    $accession= $_POST['accession'];
    $adviser = $_POST['adviser'];
    $tags = $_POST['tags'];
    $month_yr = $_POST['month-yr'];
    $description = $_POST['description'];

    $panels = json_encode(explode("\r\n", $panel));
    $authors = json_encode(explode("\r\n", $author));

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt =  strtolower(end($fileExt));

    $cover = $_FILES['cover'];
    $coverName = $_FILES['cover']['name'];
    $coverTmpName = $_FILES['cover']['tmp_name'];
    $coverSize = $_FILES['cover']['size'];
    $coverError = $_FILES['cover']['error'];

    $coverExt = explode('.', $coverName);
    $coverActualExt =  strtolower(end($coverExt));

    $allowed = array('pdf');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000000){
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../public/pdfs/' . $fileNameNew;

                $coverNameNew = uniqid('', true) . "." . $coverActualExt;
                $coverDestination = '../public/images/cover/' . $coverNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);
                move_uploaded_file($coverTmpName, $coverDestination);

                $sql = "INSERT INTO `studies` (`project_title`, `research_title`, `authors`, `panels`, `accession`, `adviser`, `tags`, `month_yr`, `description`, `file`, `cover`) VALUES ('$pTitle', '$rTitle', '$authors', '$panels', '$accession', '$adviser', '$tags', '$month_yr', '$description', '$fileNameNew', '$coverNameNew')";
                $res = $conn->query($sql);
                echo "<script>alert('Success');</script>";
            } else {
                echo "<script>alert('File is too big');</script>";
            }
        } else {
            echo "<script>alert('There was an error uploading your file');</script>";
        }
    } else {
        echo "<script>alert('File is not supported. Please input valid file extension. PDF only');</script>";
    }
}


$imports = '
<link rel="stylesheet" href="../src/css/upload_res.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">            
';
$showNav = true;
$isLoggedIn = true;
$content_template = "../src/template/upload_research_page.php";
include "../base.php";
?>