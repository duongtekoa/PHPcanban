<?php 
session_start();
ob_start();



?>
<?php
include "config/config.php";
if(isset($_POST['thanhtoan'])){
    if(isset($_SESSION['dn'])){
        
        
        if(isset($_SESSION['sanpham_1'])){

          $b1 = $_SESSION['sanpham_1']['ma'];
          $b2 = $_SESSION['sanpham_1']['ten'];
          $b3 = $_SESSION['dn'];
          $b4 = $_SESSION['mkh'];
          $b5 = $_SESSION['p1'];
          $b6 = $_SESSION['sanpham_1']['gia'];
          $b7 = (int)$_SESSION['sanpham_1']['gia'] * $_SESSION['p1'];
          $b8 =  date('d/m/Y');
          $b9 = $_SESSION['sanpham_1']['anh'];

            echo $b1;
            echo $b2;
            echo $b3;
            echo $b4;
            echo $b5;
            echo $b6;
            echo $b7;
            echo $b8;
            echo $b9;


       $is = "INSERT INTO `donhang`( `Ma_SP`, `Ten_SP`, `Ma_KH`, `Ten_KH`, `SoLuong`, `DonGia`, `ThanhTien`, `NgayMuaHang`, `HinhAnh`) 
       VALUES ('$b1','$b2','$b4','$b3','$b5','$b6','$b7','$b8','$b9')"
       $rss = $mysqli -> query($is);
       if($rss === TRUE){
       echo "thanh cong";
       }else{
        echo "that bai";
          }
        }else{
            echo "";
        } 
        
    }else{
        header("location: dangnhap.php");
    }
}
?>  