<?php

require_once('../../dompdf/autoload.inc.php');
require_once('../../db/db.php');
use Dompdf\Dompdf;
extract($_POST);

// if(isset($submit)){
  echo 'hello';
if(true){
  $key = $_POST['key'];
  $type = $_POST['type'];
  $table = $_POST['table'];
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

  $sql = "SELECT * FROM $table WHERE project_title LIKE '%$key%' AND is_archived = 0 $within";
  // $sql = "SELECT * FROM studies";
  $result = $conn->query($sql);
  $html = '';
  $html .= '
    <h2 align="center">Export Data To PDF File Using PHP and MySQL</h2>
    <table style="width: 100%; border-collapse: collapse;">
      <tr> 
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Serial No</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">First Nanec/th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Last Name</th> 
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">city</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Country</th>
      </tr>
  ';
  if($result->num_rows > 0){
    $count = 1;
    while($row = $result->fetch_assoc()){
      $html .= '
        <tr>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$count.'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['project_title'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['research_title'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['created_at'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">hmm</td>
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