<?php
include ('../../db/db.php');

$sql = "SELECT 
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Logged in') AS logg,
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Viewed%') AS vw,
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Uploaded a Survey%') AS upls,    
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Uploaded a Research%') AS uplr,
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Requested%') AS req,
    (SELECT COUNT(*) FROM logs WHERE activity LIKE 'Responded%') AS res
FROM 
    logs
LIMIT 1";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
$data = [
  ['label'=> 'Logged in' , 'y'=>(int)$row['logg'] ],
  ['label'=> 'Viewed a Research' , 'y'=>(int)$row['vw'] ],
  ['label'=> 'Uploaded a Research' , 'y'=>(int)$row['uplr'] ],
  ['label'=> 'Uploaded Survey' , 'y'=>(int)$row['upls'] ],
  ['label'=> 'Responded on a survey' , 'y'=>(int)$row['res'] ],
  ['label'=> 'Requested a Research Paper' , 'y'=>(int)$row['req'] ],
];
echo json_encode($data);