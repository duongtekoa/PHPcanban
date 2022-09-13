<?php
$lifetime = 60*60*24*365;
session_set_cookie_params($lifetime,'/');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
            border: 1px solid red;
            padding: 10px 10px 10px 10px;
            width: 200px;
        }
        input{
            margin: 10px 10px 10px 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="index.php"><br>
        <label>Tên đăng nhập</label><br>
        <input name="user" type="text" /><br>
        <label>Mật khẩu</label><br>
        <input name="pass" type="password" /><br>
        <button name="gui" type="submit">Gửi</button>
    </form>
    <?php
    
    include "../config/config.php";
    echo "<br>";
    if(isset($_POST['gui'])){
        $a = isset($_POST['user']) ? $_POST['user'] : "";
        $b = isset($_POST['pass']) ? $_POST['pass'] : "";
        
        
$sql = "SELECT * FROM `admin` WHERE user = '$a' AND pass = '$b' ";
 

$result = $mysqli->query($sql);
 

if ($result->num_rows  === 1) 
{
    
    echo "Đăng nhập Thành Công";
    header("location:qladmin.php");
} 
else {
    echo "SAI MẬT KHẨU RỒI Ạ :)))";
}
 
while ($row = $result->fetch_assoc()){

$_SESSION['quyen'] = $row['quyen'];
$_SESSION['us'] = $a;
}

$mysqli->close();
    }
    
?>
</body>
</html>