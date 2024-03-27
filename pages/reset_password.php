<?php

if(isset($_POST['reset'])){
    include "../db/db.php";
    $token = $_POST['token'];
    $sql1 = "SELECT * FROM account WHERE reset_token='$token' and reset_expiration > NOW()";
    $res1 = $conn->query($sql1);
    if($res1->num_rows > 0){
        while($row1 = $res1->fetch_assoc()){
            echo $row1['reset_token'];
            echo '<br>'.$token;
            if( $token == $row1['reset_token']){
                $pass = $_POST['password'];
                $conf = $_POST['confirm'];
                if($pass == $conf){
                    $hash = md5($pass);
                    $sql = "UPDATE `account` SET `password`='$hash', `reset_token`=null, `reset_expiration`=null WHERE id = '". $row1['id'] ."'";
                    $res = $conn->query($sql);
                    echo "<br>success reset password";
                }
            }else{
                echo "error";
            }
        }   
    }else{
        $row = $res1->fetch_assoc();
        $sql = "UPDATE `account` SET `reset_token`=null, `reset_expiration`=null WHERE id = '". $row['id'] ."'";
        $res = $conn->query($sql);
        echo "Your token has expired. Please click to send a new one.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" value="<?= $_GET['token'] ?>" name="token" hidden>
        <input type="password" name="password" required >
        <input type="password" name="confirm"  required>
        <input type="submit" name="reset" value="reset">
    </form>
</body>
</html>