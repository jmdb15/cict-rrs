<?php
$host = 'localhost';
$dbname = 'cict';
$username = 'root';
$password = '';

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function insertLog($conn, $id, $log, $res_id=null){
    if($res_id != null){
        // $sql = "INSERT INTO `logs`(`account_id`, `studies_id`, `activity`) VALUES('$id', '$res_id', '$log')";
        $sql = "INSERT INTO `logs` (`account_id`, `studies_id`, `activity`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $id, $res_id, $log);
    }else{
        $sql = "INSERT INTO `logs`(`account_id`, `activity`) VALUES(?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id, $log);
    }
    $stmt->execute();
    // $conn->query($sql);
}

function generate_hash($password) {
    // Generate a random salt
    $options = ['cost' => 11]; // You can adjust the cost parameter as needed for your application
    $hash = password_hash($password, PASSWORD_BCRYPT, $options);
    return $hash;
}

function verify_password($password, $hashed_password) {
    return password_verify($password, $hashed_password);
}
