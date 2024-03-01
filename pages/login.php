<?php
if(isset($_POST['submit'])){
    include "../db/db.php";
    $stud = $_POST['email'];
    $pass = $_POST['password'];
    $hash = md5($pass);
    $sql = "SELECT * FROM account WHERE `email`= '$stud' AND `password` = '$hash'";
    $res = $conn->query($sql);
    if($res->num_rows > 0)
    {
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"] = $row['email'];
        header("Location:index.php");
    }else{  
        echo "no credentials";
    }
}

$imports = '<link rel="stylesheet" href="../src/css/login.css">';
$showNav = false;
$content_template = "../src/template/login_page.php";
include "../base.php";
?>