<?php
session_start();
require_once('../../dompdf/autoload.inc.php');
require_once('../../db/db.php');
use Dompdf\Dompdf;
extract($_POST);

$uid = $_SESSION['id'];
insertLog($conn, $uid, 'Report for activity logs are generated');

// if(isset($submit)){
if(true){
  $key = $_POST['key'];
  $type = $_POST['type'];
  $table = "logs";
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

  $sql = "SELECT l.*, p.first_name, p.last_name FROM logs l JOIN profile p ON l.account_id=p.account_id WHERE CONCAT_WS(' ', p.first_name, p.last_name) LIKE '%$key%' $within";
  // $sql = "SELECT * FROM studies";
  $result = $conn->query($sql);
  date_default_timezone_set('Asia/Shanghai');
  $currentDateTime = date('M d, Y h:i a');
  $html = '';
  $cict = '../../src/img/images.jpeg';
  $bsu = '../../src/img/bsu.jpg';
  $html .= '
    <style>
      .div{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .two{
        width: 100%;
        display: flex;
        flex-direction: column;
        font-size: 1rem;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
      }
      .footer {
        position: fixed;
        bottom: 10px;
        left: 0;
        right: 0;
        text-align: right;
        font-size: 15px;
        color: orange;
      }
      .two h1{
        margin: 0;
      }
      .two p{
        font-size: 14px;
      }
      .three{
        top: 0;
        left: 0;
        position: absolute;
      }
      .four{
        top: 0;
        right: 0;
        position: absolute;
      }
    </style>
    <div class="div">
      
      <div class="two" align="center">
        <h1>Bulacan State University </h1>
        <p style="margin: 0;">College of Information and Communications Technology</p>
        <p>Research Repository System<p/>
      </div>
      <div class="three">
        <img src="data:image/jpg;base64,'.base64_encode(file_get_contents($bsu)).'" style="position:absolute; top: 10px; left: 5px;" height="100" width="110">
      </div>
      <div class="four">
        <img src="data:image/jpeg;base64,'.base64_encode(file_get_contents($cict)).'" style="position:absolute; top: 10px; left: 5px;" height="100" width=110">
      </div>

    </div>
    <h4 align="center">Activity Logs of Users</h4>
    <p>Report generated on: '.$currentDateTime.'</p>
    <table style="width: 100%; border-collapse: collapse;">
      <tr> 
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">ID</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Name</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Activty</th>
        <th style="border:1px solid #ddd; padding:8px; text-align:left;">Created at</th>
      </tr>
  ';
  if($result->num_rows > 0){
    $count = 1;
    while($row = $result->fetch_assoc()){
      $dateTime = new DateTime($row['created_at']);
      $row['created_at'] = $dateTime->format("F j, Y");
      $html .= '
        <tr>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$count.'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['first_name'].' '.$row['last_name'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['activity'].'</td>
          <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$row['created_at'].'</td>
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
  $html .= '</table>
  <div class="footer" >Printed by CICT-Files Admin</div>';
  $dompdf = new DOMPDF();
  $dompdf->loadHtml($html);
  $dompdf->setPaper('A4', 'portrait');
  $dompdf->render();
  $dompdf->stream('data.pdf');
}