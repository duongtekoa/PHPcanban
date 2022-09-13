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
            <td>Mã Khách Hàng</td>
            <td>Tên Khách Hàng</td>
            <td>Số Điện Thoại</td>
            <td>Địa Chỉ</td>
            <td>EMAIL</td>
            <td>USER</td>
            <td>PASS</td>
        </tr>
        <?php 
        include "../config/config.php";
        
        if (isset($_GET["Ma_KH"]) && !empty(trim($_GET["Ma_KH"]))) {
            // Get id from url
            $makh = trim($_GET["Ma_KH"]);
            echo "OK Lấy đc Ma_KH trên URL là :))" . "$makh" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

       $sqlread = "SELECT * FROM `khachhang` WHERE Ma_KH = $makh";
       $resulta = $mysqli->query($sqlread);
       if($resulta->num_rows > 0 ){
        echo "có dữ liệu trong sql";
         while($row = $resulta->fetch_assoc()){  ?>
             <tr>
     <td><?php echo $row['Ma_KH']?></td>
     <td><?php echo $row['Ten_KH']?></td>
     
     <td><?php echo $row['SDT']?></td>
     <td><?php echo $row['DiaChi']?></td>
     <td><?php echo $row['Email']?></td>
     <td><?php echo $row['user']?></td>
     <td><?php echo $row['pass']?></td>
     <td>
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