<?php
session_start();
ob_start();

$u = $_SESSION['us'];


$case = $_SESSION['quyen'];

include "headad.php";
echo "<nav>
        <ul>
        <li><a href=\"xoasp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>xóa sản phẩm</a></li>
        <li><a href=\"xoakh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>xóa khách hàng</a></li>
           <li><a href=\"xoadh.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>xóa đơn hàng</a></li>
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
     <a href="deletekh.php?Ma_KH=<?= $row["Ma_KH"]; ?>" class="btn btn-danger btn-sm">
             <i class="bi bi-trash"></i>
           </a>
           
           
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