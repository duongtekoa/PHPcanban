<?php 
session_start();
ob_start();
error_reporting(0);
include "include/header.php"

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
    position: relative;
    right: 110px;
    height: auto;
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
    </style>

</head>
<article>
<form method="post" action="giohang.php" >
<table border="1">
    <tr>
        <td>Ảnh</td>
        <td>Tên</td>
        <td>Giá</td>
        <td>Số Lượng</td>
        <td>Tổng Tiền</td>
        <td>Edit</td>
    </tr>
    
    <?php
    include "config/config.php";
    echo "<br>";
    


    

?>





<tr>
<?php
       
if(isset($_SESSION['sanpham_1'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_1']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_1']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_1']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp1']."\"  name=\"sp1\">". "<button type=\"submit\" name=\"cong1\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong1'])){
    $_SESSION['p1'] = $_POST['sp1'];
    echo $_SESSION['p1'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_1']['gia'] * $_SESSION['p1'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_1\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_1'])){
        unset($_SESSION['sanpham_1']);
    }
    
}else{
    echo "";
} 




?>


</tr>
<tr>
<?php
       
if(isset($_SESSION['sanpham_2'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_2']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_2']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_2']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp2']."\"  name=\"sp2\">". "<button type=\"submit\" name=\"cong2\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong2'])){
    $_SESSION['p2'] = $_POST['sp2'];
    echo $_SESSION['p2'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_2']['gia'] * $_SESSION['p2'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_2\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_2'])){
        unset($_SESSION['sanpham_2']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_3'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_3']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_3']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_3']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp3']."\"  name=\"sp3\">". "<button type=\"submit\" name=\"cong3\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong3'])){
    $_SESSION['p3'] = $_POST['sp3'];
    echo $_SESSION['p3'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_3']['gia'] * $_SESSION['p3'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_3\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_3'])){
        unset($_SESSION['sanpham_3']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_4'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_4']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_4']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_4']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp4']."\"  name=\"sp4\">". "<button type=\"submit\" name=\"cong4\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong4'])){
    $_SESSION['p4'] = $_POST['sp4'];
    echo $_SESSION['p4'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_4']['gia'] * $_SESSION['p4'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_4\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_4'])){
        unset($_SESSION['sanpham_4']);
    }
    
}else{
    echo "";
} 




?>

<tr>
<?php
       
if(isset($_SESSION['sanpham_5'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_5']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_5']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_5']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp5']."\"  name=\"sp5\">". "<button type=\"submit\" name=\"cong5\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong5'])){
    $_SESSION['p5'] = $_POST['sp5'];
    echo $_SESSION['p5'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_5']['gia'] * $_SESSION['p5'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_5\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_5'])){
        unset($_SESSION['sanpham_5']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_6'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_6']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_6']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_6']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp6']."\"  name=\"sp6\">". "<button type=\"submit\" name=\"cong6\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong6'])){
    $_SESSION['p6'] = $_POST['sp6'];
    echo $_SESSION['p6'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_6']['gia'] * $_SESSION['p6'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_6\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_6'])){
        unset($_SESSION['sanpham_6']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_7'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_7']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_7']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_7']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp7']."\"  name=\"sp7\">". "<button type=\"submit\" name=\"cong7\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong7'])){
    $_SESSION['p7'] = $_POST['sp7'];
    echo $_SESSION['p7'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_7']['gia'] * $_SESSION['p7'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_7\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_7'])){
        unset($_SESSION['sanpham_7']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_8'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_8']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_8']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_8']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp8']."\"  name=\"sp8\">". "<button type=\"submit\" name=\"cong8\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong8'])){
    $_SESSION['p8'] = $_POST['sp8'];
    echo $_SESSION['p8'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_8']['gia'] * $_SESSION['p8'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_8\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_8'])){
        unset($_SESSION['sanpham_8']);
    }
    
}else{
    echo "";
} 




?>



</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_9'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_9']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_9']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_9']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp9']."\"  name=\"sp9\">". "<button type=\"submit\" name=\"cong9\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong9'])){
    $_SESSION['p9'] = $_POST['sp9'];
    echo $_SESSION['p9'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_9']['gia'] * $_SESSION['p9'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_9\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_9'])){
        unset($_SESSION['sanpham_9']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_10'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_10']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_10']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_10']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp10']."\"  name=\"sp10\">". "<button type=\"submit\" name=\"cong10\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong10'])){
    $_SESSION['p10'] = $_POST['sp10'];
    echo $_SESSION['p10'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_10']['gia'] * $_SESSION['p10'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_10\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_10'])){
        unset($_SESSION['sanpham_10']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_11'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_11']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_11']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_11']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp11']."\"  name=\"sp11\">". "<button type=\"submit\" name=\"cong11\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong11'])){
    $_SESSION['p11'] = $_POST['sp11'];
    echo $_SESSION['p11'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_11']['gia'] * $_SESSION['p11'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_11\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_11'])){
        unset($_SESSION['sanpham_11']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_12'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_12']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_12']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_12']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp12']."\"  name=\"sp12\">". "<button type=\"submit\" name=\"cong12\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong12'])){
    $_SESSION['p12'] = $_POST['sp12'];
    echo $_SESSION['p12'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_12']['gia'] * $_SESSION['p12'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_12\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_12'])){
        unset($_SESSION['sanpham_12']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_13'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_13']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_13']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_13']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp13']."\"  name=\"sp13\">". "<button type=\"submit\" name=\"cong13\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong13'])){
    $_SESSION['p13'] = $_POST['sp13'];
    echo $_SESSION['p13'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_13']['gia'] * $_SESSION['p13'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_13\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_13'])){
        unset($_SESSION['sanpham_13']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_14'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_14']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_14']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_14']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp14']."\"  name=\"sp14\">". "<button type=\"submit\" name=\"cong14\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong14'])){
    $_SESSION['p14'] = $_POST['sp14'];
    echo $_SESSION['p14'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_14']['gia'] * $_SESSION['p14'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_14\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_14'])){
        unset($_SESSION['sanpham_14']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_15'])){
    $_SESSION['dem']++;
    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_15']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_15']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_15']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp15']."\"  name=\"sp15\">". "<button type=\"submit\" name=\"cong15\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong15'])){
    $_SESSION['p15'] = $_POST['sp15'];
    echo $_SESSION['p15'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_15']['gia'] * $_SESSION['p15'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_15\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_15'])){
        unset($_SESSION['sanpham_15']);
    }
    
}else{
    echo "";
} 




?>


</tr>


<tr>
<?php
       
if(isset($_SESSION['sanpham_16'])){
    
    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_16']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_16']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_16']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp16']."\"  name=\"sp16\">". "<button type=\"submit\" name=\"cong16\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong16'])){
    $_SESSION['p16'] = $_POST['sp16'];
    echo $_SESSION['p16'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_16']['gia'] * $_SESSION['p16'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_16\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_16'])){
        unset($_SESSION['sanpham_16']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_17'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_17']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_17']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_17']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp17']."\"  name=\"sp17\">". "<button type=\"submit\" name=\"cong17\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong17'])){
    $_SESSION['p17'] = $_POST['sp17'];
    echo $_SESSION['p17'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_17']['gia'] * $_SESSION['p17'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_17\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_17'])){
        unset($_SESSION['sanpham_17']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_18'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_18']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_18']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_18']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp18']."\"  name=\"sp18\">". "<button type=\"submit\" name=\"cong18\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong18'])){
    $_SESSION['p18'] = $_POST['sp18'];
    echo $_SESSION['p18'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_18']['gia'] * $_SESSION['p18'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_18\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_18'])){
        unset($_SESSION['sanpham_18']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_19'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_19']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_19']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_19']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp19']."\"  name=\"sp19\">". "<button type=\"submit\" name=\"cong19\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong19'])){
    $_SESSION['p19'] = $_POST['sp19'];
    echo $_SESSION['p19'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_19']['gia'] * $_SESSION['p19'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_19\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_19'])){
        unset($_SESSION['sanpham_19']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_20'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_20']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_20']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_20']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp20']."\"  name=\"sp20\">". "<button type=\"submit\" name=\"cong20\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong20'])){
    $_SESSION['p6'] = $_POST['sp20'];
    echo $_SESSION['p20'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_20']['gia'] * $_SESSION['p20'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_20\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_20'])){
        unset($_SESSION['sanpham_20']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_21'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_21']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_21']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_21']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp21']."\"  name=\"sp21\">". "<button type=\"submit\" name=\"cong21\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong21'])){
    $_SESSION['p21'] = $_POST['sp21'];
    echo $_SESSION['p21'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_21']['gia'] * $_SESSION['p21'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_21\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_21'])){
        unset($_SESSION['sanpham_21']);
    }
    
}else{
    echo "";
} 




?>


</tr>

<tr>
<?php
       
if(isset($_SESSION['sanpham_22'])){

    echo "<td>"  .  "  <img src=\" "  ."admin/" .  $_SESSION['sanpham_22']['anh']  . " \"    />" . "</td>";
    echo "<td>" .$_SESSION['sanpham_22']['ten'].  "</td>";
    echo "<td>" .$_SESSION['sanpham_22']['gia']. "</td>";
    echo "<td>"  ."<input class=\"nb\" type=\"number\"  value=\"".$_POST['sp22']."\"  name=\"sp22\">". "<button type=\"submit\" name=\"cong22\"\>tính tổng</button>" ."</td>" ;    
    
   if(isset($_POST['cong22'])){
    $_SESSION['p22'] = $_POST['sp22'];
    echo $_SESSION['p22'];
    
   }
   
    echo "<td>" . (int)$_SESSION['sanpham_22']['gia'] * $_SESSION['p22'] . "</td>";

    echo "<td>" . "<button type=\"submit\" name=\"xoa_22\">Xóa</button>"  . "</td>";

    if(isset($_POST['xoa_22'])){
        unset($_SESSION['sanpham_22']);
    }
    
}else{
    echo "";
} 




?>


</tr>

</table>
</form>
<?php


if(isset($_POST['xoaall'])){
session_destroy();
}
?>

    <form method="post" action="giohang.php">
        <button type="submit" name="xoaall">Xóa sạch giỏ hàng</button><br>
        <button type="submit" name="thanhtoan">Thanh Toán</button>
    </form>

<?php
include "thanhtoan.php";
?>
<?php
$d_1 = isset($_SESSION['sanpham_1']) ? 1 : 0;
$d_2 = isset($_SESSION['sanpham_2']) ? 1 : 0;
$d_3 = isset($_SESSION['sanpham_3']) ? 1 : 0;
$d_4 = isset($_SESSION['sanpham_4']) ? 1 : 0;
$d_5 = isset($_SESSION['sanpham_5']) ? 1 : 0;
$d_6 = isset($_SESSION['sanpham_6']) ? 1 : 0;
$d_7 = isset($_SESSION['sanpham_7']) ? 1 : 0;
$d_8 = isset($_SESSION['sanpham_8']) ? 1 : 0;
$d_9 = isset($_SESSION['sanpham_9']) ? 1 : 0;
$d_10 = isset($_SESSION['sanpham_10']) ? 1 : 0;
$d_11 = isset($_SESSION['sanpham_11']) ? 1 : 0;
$d_12 = isset($_SESSION['sanpham_12']) ? 1 : 0;
$d_13 = isset($_SESSION['sanpham_13']) ? 1 : 0;
$d_14 = isset($_SESSION['sanpham_14']) ? 1 : 0;
$d_15 = isset($_SESSION['sanpham_15']) ? 1 : 0;
$d_16 = isset($_SESSION['sanpham_16']) ? 1 : 0;
$d_17 = isset($_SESSION['sanpham_17']) ? 1 : 0;
$d_18 = isset($_SESSION['sanpham_18']) ? 1 : 0;
$d_19 = isset($_SESSION['sanpham_19']) ? 1 : 0;
$d_20 = isset($_SESSION['sanpham_20']) ? 1 : 0;
$d_21 = isset($_SESSION['sanpham_21']) ? 1 : 0;
$d_22 = isset($_SESSION['sanpham_22']) ? 1 : 0;
$dem = $d_1 + $d_2 + $d_3 + $d_4 + $d_5 + $d_6 + $d_7 + $d_8 + $d_9 + $d_10 + $d_11 + $d_12 + $d_13 + $d_14 + $d_15 + $d_16 + $d_17 + $d_18 + $d_19 + $d_20 + $d_21 + $d_22 ;
$_SESSION['c'] = $dem;
echo  $_SESSION['c'];
?>
</article>

<?php 
include "include/footer.php";

?>