<?php
require_once('../../db/db.php');

$key = $_POST['key'];
$within = '';
$sql = '';
// if (isset ($_POST['start'])) {
//     $start = $_POST['start'];
//     $end = $_POST['end'];
//     $sql = "SELECT * FROM requests WHERE `project_title` LIKE '%$key%' AND (created_at BETWEEN '$start' AND '$end')";
// } else {
    $type = $_POST['date'];
    switch ($type) {
        case 'all':
        $within = '';
        break;
        case 'yesterday':
        $within = "AND l.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)";
        break;
        case 'week':
        $within = "AND l.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 WEEK)";
        break;
        case 'month':
        $within = "AND l.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)";
        break;
        case 'year':
        $within = "AND l.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 YEAR)";
        break;
    }
    $sql = "SELECT l.*, p.* FROM logs l LEFT JOIN profile p ON l.account_id = p.account_id WHERE CONCAT_WS(' ', p.first_name, p.middle_name, p.last_name) LIKE '%$key%' OR p.account_id LIKE '%$key%' $within"; // LIKE '%$searchKey%'
// }
$result = $conn->query($sql);
$data = array();

while ($row = $result->fetch_assoc()) {
    $dateTime = new DateTime($row['created_at']);
    $row['created_at'] = $dateTime->format("F j, Y");    
    $data[] = $row;
}
echo json_encode($data);


