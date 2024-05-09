<?php
include ('../../db/db.php');

$sql = "SELECT Count(s.account_id) as cc, p.course FROM studies s RIGHT JOIN profile p ON s.account_id=p.account_id GROUP BY p.course";
$res = $conn->query($sql);
$data = [];
while($row = $res->fetch_assoc()){
  $data[] = ['label' => $row['course'], 'y' => (int)$row['cc']];
}
echo json_encode($data);