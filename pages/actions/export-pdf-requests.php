<?php

require_once('../../dompdf/autoload.inc.php');
require_once('../../db/db.php');
use Dompdf\Dompdf;
extract($_POST);

// if(isset($submit)){
if(true){
  $key = $_POST['key'];
  $type = $_POST['type'];
  $table = "requests";
  $within = '';
  switch ($type) {
    case 'all':
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

  $sql = "SELECT r.*, p.first_name, p.last_name, s.project_title FROM requests r JOIN profile p ON r.account_id=p.account_id JOIN studies s ON r.studies_id=s.id WHERE status != 0 $within";
  // $sql = "SELECT * FROM studies";
  $result = $conn->query($sql);
  $html = '';
  $html .= '
    <h2 align="center">Export Transactions</h2>
    <table style="width: 100%; border-collapse: collapse;">
      <tr> 
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">ID</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Name</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Study</th> 
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Status</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Took Action on</th>
      </tr>
  ';
  if($result->num_rows > 0){
    $count = 1;
    while($row = $result->fetch_assoc()){
      $dateTime = new DateTime($row['updated_at']);
      $row['updated_at'] = $dateTime->format("F j, Y");
      $status = ($row['status'] == 1) ? "Approved" : "Declined";
      $html .= '
        <tr>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$count.'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['first_name'].' '.$row['last_name'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['project_title'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'. $status .'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['updated_at'].'</td>
        </tr>
      ';
      $count++;
    }
  }else{
    $html .= '
      <tr>
        <th colspan="5" style="border: 1px solid #ddd;">No data</th>
      </tr>
    ';
  }
  $html .= '</table>';
  $dompdf = new DOMPDF();
  $dompdf->loadHtml($html);
  $dompdf->setPaper('A4', 'portrait');
  $dompdf->render();
  $dompdf->stream('data.pdf');
}