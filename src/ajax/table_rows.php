<?php
  include("../../db/db.php");

  if(isset($_POST['type'])){
  $searchKey = $_POST['key'];
  $within = '';
  $active = $_POST['active'];
  $sql = '';
  $is_archived = '';
  if (isset ($_POST['start'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "SELECT * FROM studies WHERE `project_title` LIKE '%$searchKey%' AND (created_at BETWEEN '$start' AND '$end')";
  } else {
    $type = $_POST['type'];
    switch ($type) {
      case 'all':
        $within = '';
        break;
      case 'yesterday':
        $within = 'AND created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)';
        break;
      case 'week':
        $within = 'AND created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 WEEK)';
        break;
      case 'month':
        $within = 'AND created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)';
        break;
      case 'year':
        $within = 'AND created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 1 YEAR)';
        break;
    }
    $sql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number WHERE is_archived = $active AND `project_title` LIKE '%$searchKey%' $within";
  }
  $result = $conn->query($sql);
  $data = array();
  while ($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
  echo json_encode($data);
}else{
  $sql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number";
  $result = $conn->query($sql);
  echo json_encode($result);
}
?>