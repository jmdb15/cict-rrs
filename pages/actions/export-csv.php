<?php

// JSON data
include('../../db/db.php');
$id = $_POST['id'];
$sql = "SELECT * FROM `surveys` WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// print_r($data);
// foreach ($data as $entry) {
    // foreach($data[0] as $key => $value){
    //     if(gettype($value) == 'string'){
    //         echo $value;
    //     }else{
    //         echo '\n '.$key.' \n';
    //         print_r($value);
    //     }
    // }
    // print_r($data[1]);
    // $questionnaireRow = [];
    // foreach ($data[0][0] as $key => $question) {
    //     $questionnaireRow[] = $question['question'];
    // }
    // $csvData[] = $questionnaireRow;
    
    // $answerRow = [];
    // foreach ($data[0][1] as $key => $value) {
    //     if(gettype($value) == 'array'){
    //         $answerRow[] = implode(', ', $value);
    //     }else{
    //         $answerRow[] = $value;
    //     }
    // }
    // $csvData[] = $answerRow;

// }
try{
    
    $jsonData =  file_get_contents('../src/js/surveys/'.$row['filename']);
    // Decode JSON
    $data= json_decode(json_decode($jsonData));

    // Initialize CSV data
    $csvData = [];

    $questionnaireRow = ['Email'];
    foreach ($data[0] as $entry) {
        foreach ($entry as $key => $value) {
            $questionnaireRow[] = $value->question;
        }
    }
    $csvData[] = $questionnaireRow;

    foreach ($data[1] as $entry) {
        foreach ($entry as $answers) {
            $answerRow = [];
            foreach ($answers as $key => $value) {
                if(gettype($value) == 'array'){
                    $answerRow[] = implode(', ', $value);
                }else{
                    $answerRow[] = $value;
                }
            }
            $csvData[] = $answerRow;
        }
    }
        
    // Set headers for CSV download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="output.csv"');

    // Output CSV data to the browser
    $output = fopen('php://output', 'w');
    foreach ($csvData as $rowData) {
        fputcsv($output, $rowData);
    }
    fclose($output);

    // Store CSV content in a variable
    $csvContent = ob_get_clean();

    // Return CSV content
    echo $csvContent;
}catch(error $e){
    echo $e;
}
?>