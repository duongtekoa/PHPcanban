<?php
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
        *{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

.form-1 {
    float: left;
 width: 300px;
 border: 1px solid green;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
}
.form-1 button{
    background: green;
}
.form-2 {
    float: right;
 width: 300px;
 border: 1px solid green;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
}
.form input {
 width: 100%;
 padding: 10px 0;
}
    </style>

</head>
<article>
<form method="post" action="dangnhap.php" class="form-1">

<h2>Đăng ký thành viên</h2>
Name: <br>
<input type="text" name="name" value="" required/><br>

Username: 

 <br>
<input type="text" name="username" value="" required><br>

Password: <br>
<input type="password" name="password" value="" required/><br>

Email: <br>
<input type="email" name="email" value="" required/><br>

Phone: <br>
<input type="text" name="phone" value="" required/><br>

Address: <br>
<input type="text" name="address" value="" required/><br>



<button type="submit" name="dangky" value="Đăng Ký">Đăng kí</button>
</form>

<?php
include "config/config.php";
if(isset($_POST['dangky'])){
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    
    if (empty($name)) {
        array_push($errors, "name is required"); 
        }
    if (empty($username)) {
    array_push($errors, "Username is required"); 
    }
    if (empty($email)) {
    array_push($errors, "Email is required"); 
    }
    if (empty($phone)) {
    array_push($errors, "Password is required"); 
    }
    if (empty($password)) {
    array_push($errors, "Two password do not match"); 
    }
    if (empty($address)) {
        array_push($errors, "address is required"); 
        }

        
    
    

include "config/config.php";
$us = "SELECT `user` FROM `khachhang`" ;
$ketquaus = $mysqli->query($us);
while($row = $ketquaus -> fetch_assoc()){
    if($row['user'] === $_POST['username']){
        echo "user đã tồn tại";
    }
}

$sql = "INSERT INTO `khachhang`(`Ten_KH`, `SDT`, `DiaChi`, `Email`, `user`, `pass`) 
    VALUES ('$name','$phone','$address','$email','$username','$password')";

    $ketqua = $mysqli->query($sql);
    if(isset($ketqua)){
        echo "Đăng kí thành công";
    }
}
?>
<form method="post" action="dangnhap.php" class="form-2">

<h2>Đăng nhập thành viên</h2>
user: <input type="text" name="dn" value="" required/><br>

pass: <input type="password" name="mk" value="" required>
<button type="submit" name="dangnhap" onclick="refreshPage()">Đăng nhập</button>
<script language="javascript">
        function refreshPage()
        {
            window.location.reload(); 
        }
      </script>
<?php
if(isset($_POST['dangnhap'])){
    include "config/config.php";
    $a = isset($_POST['dn']) ? $_POST['dn'] : "";
    $b = isset($_POST['mk']) ? $_POST['mk'] : "";
    $sqll = "SELECT * FROM `khachhang` WHERE user = '$a' AND pass = '$b' ;";
    $kq = $mysqli->query($sqll);
    
    if ($kq->num_rows  === 1) 
    {
        
        echo "Đăng nhập Thành Công";
       
        $_SESSION['dn'] = $a;
        header("location:index.php");
    } 
    else {
        echo "SAI MẬT KHẨU RỒI Ạ :)))";
    }
     
    while($row = $kq->fetch_assoc()){
        $_SESSION['mkh'] = $row['Ma_KH'];
    }
    
    $mysqli->close();
        }
    


?>
</form>
</article>
