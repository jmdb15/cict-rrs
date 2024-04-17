<?php
include('../db/db.php');
session_start();

if(isset($_POST['project-title'])){
    $id = $_SESSION['id'];
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

    if(true){
        if(true){
            if (true){
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../public/pdfs/' . $fileNameNew;

                $coverNameNew = uniqid('', true) . "." . $coverActualExt;
                $coverDestination = '../public/images/cover/' . $coverNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);
                move_uploaded_file($coverTmpName, $coverDestination);

                // $sql = "INSERT INTO studies(project_title, research_title, authors, panels, accession, adviser, tags, month_yr, description, file, cover) VALUES('$pTitle', '$rTitle', '$authors', '$panels', '$accession', '$adviser', '$tags', '$month_yr', '$description', '$fileNameNew', '$coverNameNew')";

                $sql = "INSERT INTO `studies`(`project_title`, `research_title`, `authors`, `panels`, `accession`, `adviser`, `tags`, `month_yr`, `description`, `file`, `cover`, `account_id`) VALUES ('$pTitle', '$rTitle', '$authors', '$panels', '$accession', '$adviser', '$tags', '$month_yr', '$description', '$fileNameNew', '$coverNameNew', '$id')";
               
                $conn->query($sql);
                insertLog($conn, $id    , 'Uploaded a Research: '.$pTitle);   
                if(true){
                    echo "hoho<script>alert('Success');</script>";
                }
                // else{
                //     echo "haha<script>alert('Error');</script>";
                // }
            } 
            // else {
            //     echo "hehe<script>alert('File is too big');</script>";
            // }
        }
        // else{
        //     echo "hihi<script>alert('There was an error uploading your file');</script>";
        // }
    }
    // else{
    //     echo 'nani';
    //     echo "huhu<script>alert('File is not supported. Please input valid file extension. PDF only');</script>";
    // }
    echo 'oh why';
}
