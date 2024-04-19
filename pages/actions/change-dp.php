<?php 

include('../../db/db.php');
session_start();

$uid = $_SESSION['id'];

$file = $_FILES['pict'];
$fileName = $_FILES['pict']['name'];
$fileTmpName = $_FILES['pict']['tmp_name'];
$fileSize = $_FILES['pict']['size'];
$fileError = $_FILES['pict']['error'];

$fileExt = explode('.', $fileName);
$fileActualExt =  strtolower(end($fileExt));

$allowed = array('png', 'jpg','jpeg', 'webp', 'jfif');

$_SESSION['toast']['error'] = true;

if(in_array($fileActualExt, $allowed)){
    if($fileSize < 100000000){
        if (!$fileError){
            $fileNameNew = uniqid('', true) . "." . $fileActualExt;
            // $fileNameNew = $uid . "." . $fileActualExt;
            $fileDestination = '../../public/images/display/' . $fileNameNew;
            
            move_uploaded_file($fileTmpName, $fileDestination);

            // $sql = "INSERT INTO `studies`(`project_title`, `research_title`, `authors`, `panels`, `accession`, `adviser`, `tags`, `month_yr`, `description`, `file`, `cover`, `account_id`) VALUES ('$pTitle', '$rTitle', '$authors', '$panels', '$accession', '$adviser', '$tags', '$month_yr', '$description', '$fileNameNew', '$coverNameNew', '$id')";
            $sql = "UPDATE `profile` SET `image`='$fileNameNew' WHERE account_id='$uid'";

            if($conn->query($sql)){
                $_SESSION['toast']['error'] = false;
                $_SESSION['toast']['message'] = 'Changes have been saved successfully.';
            }else{
                $_SESSION['toast']['message'] = 'Something went wrong. Please try again later.';
            }
        } else {
            $_SESSION['toast']['message'] = 'Something went wrong. Please try again later';
        }
    }
    else{
        $_SESSION['toast']['message'] = 'Image is too big.';
    }
}else{
    $_SESSION['toast']['message'] = 'Use one of these formats only: png, jpg, jpeg, webp, jfif.';
}

header('Location:../profile.php');