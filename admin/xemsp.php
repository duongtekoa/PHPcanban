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
        
       $sqlsl = "SELECT * FROM `sanpham`";
       $resulta = $mysqli->query($sqlsl);
       if($row = mysqli_fetch_row($resulta) >0){
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
     <td>
           <a href="read.php?Ma_SP=<?= $row["Ma_SP"]; ?>" class="btn btn-info btn-sm">
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