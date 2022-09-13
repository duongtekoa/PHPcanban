<?php
session_start();
ob_start();

$u = $_SESSION['us'];


$case = $_SESSION['quyen'];

include "headad.php";
echo "<nav>
        <ul>
        <li><a href=\"xemsp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>Xem sản phẩm</a></li>
        <li><a href=\"xemkh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Xem khách hàng</a></li>
           <li><a href=\"xemdh.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>Xem đơn hàng</a></li>
            <form class=\"quyen\" action=\"qladmin.php\" method=\"post\">
            <li class=\"quyen\">XIN CHÀO " . $u . " quyền " .$case. " 
            <button type=\"submit\" name=\"xuat\">ĐĂNG XUẤT</button>
            </li>
            </form>
            
        </ul>
    </nav>";

        if(isset($_POST['xuat'])){
            header("location:index.php");
            unset($_SESSION['us']);
            unset($_SESSION['quyen']);
            
        }
?>
<table border="1px">
        <tr>
            <td>Mã Khách Hàng</td>
            <td>Tên Khách Hàng</td>
            <td>Số ĐIỆN THOẠI</td>
            <td>Địa Chỉ</td>
            <td>EMAIL</td>
            <td>USE</td>
            <td>PASS</td>
        </tr>
        <?php 
        include "../config/config.php";
        
       $sqlsl = "SELECT * FROM `khachhang`";
       $resulta = $mysqli->query($sqlsl);
       if($row = mysqli_fetch_row($resulta) >0){
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
           <a href="readkh.php?Ma_KH=<?= $row["Ma_KH"]; ?>" class="btn btn-info btn-sm">
             <i class="bi bi-eye-fill"></i>
           </a>&nbsp;
           
           
         </td>

 </tr>
 <?php
     }
   } else { ?>
     <tr>
       <td class="text-center text-danger fw-bold" colspan="9"><?php echo "* ko có dữ liệu *" ?></td>
     </tr>
 <?php
   }
        ?>
    </table>