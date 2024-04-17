<?php

session_start();
include('../db/db.php');

$id = $_GET['id'];
$uid = $_SESSION['id'];
$email = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop through each form field
    $objectsArray = array("email"=>$email);
    $questionWhat ='';
    foreach ($_POST as $key => $value) {
        $ex = explode("-",$key);

        if($questionWhat == $ex[1]){
            if(!is_array($objectsArray[$ex[1]])){
                $objectsArray[$ex[1]] = [$objectsArray[$ex[1]], $value];
            }else{
                $objectsArray[$ex[1]][] = $value;
            }
        }else{
            if(is_array($value)){
                $arr = array();
                for ($i=0; $i < count($_POST[$key]); $i++) { 
                    $arr[] = $value[$i];
                }
                $objectsArray[$ex[1]] = $arr;
            }else{
                $objectsArray[$ex[1]] = $value;
            }
        }
        $questionWhat = $ex[1];
    }

    $file = $_GET['file'];
    $json = file_get_contents('../src/js/surveys/'.$file);
    $jsondecoded = json_decode(json_decode($json));

    $jsondecoded[1]->answers[] = $objectsArray;

    $filename = '../src/js/surveys/'.$file;
    file_put_contents($filename, json_encode(json_encode($jsondecoded)));
}

$sql = "INSERT INTO `response`(`account_id`, `survey_id`) VALUES ('$uid','$id')";
if($conn->query($sql)){
    insertLog($conn, $uid, 'Responded on a Survey: ');
    header("Location:index.php");
}else{
    header("Location:surveys.php");
}


?>