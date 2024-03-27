<?php 

$js =  file_get_contents('newjs.js');
echo json_decode($js);
?>