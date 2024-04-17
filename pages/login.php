<?php
include "../db/db.php";
$stud = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM account WHERE `email`= '$stud'";
$res = $conn->query($sql);
if($res->num_rows > 0)
{
    $row = mysqli_fetch_assoc($res);
    $curr_pass = $row['password'];
    if(verify_password($pass, $curr_pass)){
        session_start();
        $_SESSION["id"] = $row['number'];
        $_SESSION["email"] = $row['email'];
        insertLog($conn, $row['number'], 'Logged in');
        header("Location:index.php");
    }else{
        echo 'Wrong username or password.';
    }
}else{  
    echo "Wrong username or password.";
}
?>