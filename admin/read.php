<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px">
        <tr>
            <td>Mã Sản Phẩm</td>
            <td>Tên Sản Phẩm</td>
            <td>Hình Ảnh</td>
            <td>Giá</td>
            <td>Giá Cũ</td>
            <td>Mô Tả</td>
            <td>Mã Danh Mục</td>
        </tr>
        <?php 
        include "../config/config.php";
        
        if (isset($_GET["Ma_SP"]) && !empty(trim($_GET["Ma_SP"]))) {
            // Get id from url
            $masp = trim($_GET["Ma_SP"]);
            echo "OK Lấy đc Ma_SP trên URL là :))" . "$masp" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

       $sqlread = "SELECT * FROM `sanpham` WHERE Ma_SP = $masp";
       $resulta = $mysqli->query($sqlread);
       if($resulta->num_rows > 0 ){
        echo "có dữ liệu trong sql";
         while($row = $resulta->fetch_assoc()){  ?>
             <tr>
     <td><?php echo $row['Ma_SP']?></td>
     <td><?php echo $row['Ten_SP']?></td>
     <td><img src="<?php echo $row['HinhAnh']?>" alt="" /></td>
     <td><?php echo $row['Gia']?></td>
     <td><?php echo $row['GiaCu']?></td>
     <td><?php echo $row['MoTa']?></td>
     <td><?php echo $row['Ma_DM']?></td>
         </tr>
 <?php
     } 
    } else { ?>
        <tr>
          <td class="text-center text-danger fw-bold" colspan="9"><?php echo "* ko có dữ liệu *" ?></td>
        </tr>
    <?php
      }
      $mysqli->close();
        

        ?>
           
     
   
</body>
</html>