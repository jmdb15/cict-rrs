<?php
require_once('../../db/db.php');

$key = $_POST['key'];
$active = $_POST['active'];

$condition = $active == 'pending' ? 'status = 0' : 'status != 0';
// $sql = "SELECT * FROM requests WHERE $condition";

$within = '';
$sql = '';
if (isset ($_POST['start'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "SELECT * FROM requests WHERE `project_title` LIKE '%$searchKey%' AND (created_at BETWEEN '$start' AND '$end')";
} else {
    $type = $_POST['type'];
    switch ($type) {
        case 'all':
        $within = '';
        break;
        case 'yesterday':
        $within = 'AND r.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)';
        break;
        case 'week':
        $within = 'AND r.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 WEEK)';
        break;
        case 'month':
        $within = 'AND r.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)';
        break;
        case 'year':
        $within = 'AND r.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 YEAR)';
        break;
    }
    // $sql = "SELECT r.*, a.email FROM requests r JOIN account a ON r.account_id = a.number WHERE $condition $within"; // LIKE '%$searchKey%'
    $sql = "SELECT r.*, s.project_title, a.email FROM requests r JOIN studies s ON r.studies_id = s.id JOIN account a ON r.account_id = a.number WHERE $condition $within"; // LIKE '%$searchKey%'
}

$result = $conn->query($sql);
$data = array();

while ($row = $result->fetch_assoc()) {
    $dateTime = new DateTime($row['created_at']);
    $row['created_at'] = $dateTime->format("F j, Y");    
    $data[] = $row;
}
echo json_encode($data);


