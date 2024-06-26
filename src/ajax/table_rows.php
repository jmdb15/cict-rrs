<?php
  include("../../db/db.php");

if(isset($_POST['date'])){
  $searchKey = $_POST['key'];
  $active = $_POST['active'];
  $type = $_POST['date'];
  $table = $_POST['table'];
  $course = $_POST['course'];
  $status = $_POST['status'] ?? '';
  $stat = $status == 'pending' ? 0 : ($status == 'files' ? 1 : -1);
  $column = $table == 'studies' ? 'research_title' : 'survey_name';
  $within = '';
  $sql = '';
  $crs = '';
  $is_archived = '';
  if (isset ($_POST['start'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $sql = "SELECT * FROM `$table` WHERE `research_title` LIKE '%$searchKey%' AND (created_at BETWEEN '$start' AND '$end')";
  } else {
    switch ($type) {
      case 'all':
        $within = '';
        break;
      case "yesterday":
        $within = "AND `created_at` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY)";
        break;
      case "week":
        $within = "AND `created_at` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 WEEK)";
        break;
      case "month":
        $within = "AND `created_at` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 MONTH)";
        break;
      case "year":
        $within = "AND `created_at` >= DATE_SUB(CURRENT_DATE, INTERVAL 1 YEAR)";
        break;
    }
    switch($course){
      case 'all':
        $crs = "";
        break;
      case 'none':
        $crs = "AND p.course = 'none'";
        break;
      default: 
        $crs = "AND p.course LIKE '%$course%'";
        break;
    }
    if($stat == -1) $sql = "SELECT s.*, a.email FROM $table s JOIN account a ON s.account_id = a.number JOIN profile p ON s.account_id = p.account_id WHERE s.is_archived = $active AND $column LIKE '%$searchKey%' $crs $within";
    else $sql = "SELECT s.*, a.email FROM $table s JOIN account a ON s.account_id = a.number JOIN profile p ON s.account_id = p.account_id WHERE s.is_archived = $active AND s.is_approved=$stat AND $column LIKE '%$searchKey%' $crs $within";
  }
  $result = $conn->query($sql);
  $data = array();
  while ($row = $result->fetch_assoc()) {
    $dateTime = new DateTime($row['created_at']);
    $row['created_at'] = $dateTime->format("F j, Y");    
    $data[] = $row;
  }
  echo json_encode($data);
}else{
  $sql = "SELECT s.*, a.email FROM studies s JOIN account a ON s.account_id = a.number";
  $result = $conn->query($sql);
  echo json_encode($result);
}
?>