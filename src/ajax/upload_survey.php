<?php
    $json_obj = $_POST['json'];
    $fileName = time().'.js';
    $jsFilePath = '../js/surveys/'.$fileName;
    file_put_contents($jsFilePath, json_encode($json_obj));
    echo $fileName;
?>