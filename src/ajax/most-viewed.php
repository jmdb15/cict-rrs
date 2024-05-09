<?php
include ('../../db/db.php');

$sql = "SELECT COUNT(*) as cc, s.research_title FROM logs l JOIN studies s ON s.id=l.studies_id WHERE activity LIKE 'Viewed %' GROUP BY l.studies_id LIMIT 10";
$res = $conn->query($sql);
$data = [];
while($row = $res->fetch_assoc()){
  $data[] = ['label' => $row['research_title'], 'y' => (int)$row['cc']];
}
echo json_encode($data);