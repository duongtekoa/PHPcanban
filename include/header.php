<?php
error_reporting(0);
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
#container{
    max-width: 1300px;
    margin: auto;
    height: auto;
    border: 1px solid #0885b8;
    border-radius: 5px;
}
header img{
    object-fit: cover;
    border-radius: 5px;
}
nav{
    width: 1300px;
    height: 75px;
    background-color: #fa8939;
    border-radius: 5px;
    position: relative;
}
nav ul{
    list-style: none;
    
    position: relative;
    top: 9px;
}
nav ul li{
    display: inline-block;
    padding-left: 50px;
    left: 50px;
    
}
nav ul li a{
    padding-top: 5px;
    color: #0885b8;
    text-decoration: none;
}
nav ul li a:hover{
    color: #cc3a05;
}
nav ul li a img{
    object-fit: cover;
    position: relative;
    left: 23px;
}
#aside-top{
    width: 300px;
    float: left;
    height: 400px;
    border: 1px solid #0885b8;
    border-radius: 5px;
    background-color: #cc3a05;
    margin-top: 5px;
    margin-left: 5px;
    margin-bottom: 5px;
}
#aside-top ul li{
    list-style: none;
}
#aside-top ul li a{
    text-decoration:none;
    color: black;
}
#aside-top ul li a:hover{
    color: #0885b8;
}
#aside-bt img{
    margin-top: 35px;
    border-radius:5px;
}
article{
    width: 950px;
    float: right;
    height: 745px;
    border-radius: 5px;
    border: 1px solid #0885b8;
    
    margin-top: 5px;
    margin-right: 10px;
    margin-bottom: 5px;
}
footer{
    width: 1300px;
    height: 300px;
    background-color: #fa8939;
    clear: both;
    border-radius: 5px;
    border: 1px solid #0885b8;
    
    
}


footer #fttop{
    list-style: none;
    
    position: relative;
    bottom:15px;

    background-color: #cc3a05;
}
footer #fttop li{
    display: inline-block;
    padding-left: 50px;
    left: 50px;
    
    
    text-decoration: none;
}
footer #fttop li img{
    position: relative;
    left: 70px;
}
footer #ftbottom ul{
    list-style: none;
    float: left;
}
.sanpham{
    width: 300px;
    height: 380px;
    float: left;
    border : 1px solid #fa8939;
    position: relative;
    margin-left: 6px ;
}
.sanpham h3{
    
    width: 300px;
    height: 50px;
    position: absolute;
    top: 0px;
    
}
.sanpham img{
    
    position: absolute;
    top: 30px;
    left: 30px;
    z-index: -1;
}
.sanpham .gm{
    
    position: absolute;
    top: 230px;
    left: 0px;
   
}
.sanpham .gc{
    
    position: absolute;
    top: 250px;
    left: 0px;
    
}
.sanpham button{
    
    position: absolute;
    top: 320px;
    left: 90px;
    
}
.nb{
    width: 50px;
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
.hl{
    float: right;
    color: #0885b8;
    
}
.pagination{
    clear: both;
}
.dem{
    text-align: center;
    background-color: #cc3a05;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    position: relative;
    bottom: 70px;
    left: 560px;
}
    </style>

</head>
<body>
<div id="container">
    <header>
        <img src="bg_col.webp" alt="" width="1300px" height="400px" />
    </header>
    <nav>
        
        <ul>
            <li><a href="index.php"><img src="icon/icon-home.png" width="35px" height="35px"/><br>Trang Chủ</a></li>
            <li><a href="dangnhap.php"><img src="icon/icon_login.png" width="35px" height="35px"/><br>Đăng Nhập</a></li>
            <li><a href="donhang.php"><img src="icon/icondh.png" width="35px" height="35px"/><br>Đơn Hàng</a></li>
            <li><a href="giohang.php"><img src="icon/iconshoping.png" width="35px" height="35px"/><br>Giỏ Hàng</a></li>
            
            <li class="hl">
        <form action="index.php" method="post">
            <?php 
            if(isset($_SESSION['dn'])){
            echo "XIN CHÀO " . $_SESSION['dn'];
            echo "<button  type=\"submit\" name=\"dangxuat\">ĐĂNG XUẤT</button>";
            }else{
                echo "";
            }
            ?>
        
            
        </form>
            </li>
        </ul>
        <p class="dem"><?php echo $_SESSION['c'] ?></p>
    </nav>
    <?php
        if(isset($_POST['dangxuat'])){
            unset($_SESSION['dn']);
            
        }
    ?>
    