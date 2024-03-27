<?php

$json = file_get_contents('BAGO.js');
$json = json_decode($json);
print_r($json[0]);
echo '<br><br>';
print_r($json[1]);
?>