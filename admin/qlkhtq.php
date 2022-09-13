<?php
session_start();
ob_start();

$u = $_SESSION['us'];


$case = $_SESSION['quyen'];

include "headad.php";
echo "<nav>
        <ul>
            <li><a href=\"qlsptq.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>Quản lí sản phẩm</a></li>
            <li><a href=\"qlkhtq.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Quản lí khách hàng</a></li>
            <li><a href=\"qldhtq.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>Quản lí đơn hàng</a></li>
            <li><a href=\"qladmintq.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Quản lí admin</a></li>
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
<div id="con">
<form class="fo" action="qlkhtq.php" method="post">
      <label>Mã Khách Hàng</label><br>
      <input type="text" name="makh" /><br>
      <label>Tên Khách Hàng</label><br>
      <input type="text" name="tenkh" /><br>
      
      <label>Số Điện Thoại</label><br>
      <input type="text" name="sdt" /><br>
      <label>Địa Chỉ</label><br>
      <input type="text" name="diachi" /><br>
      <label>EMAIL </label><br>
      <input type="text" name="email" /><br>
      <label>USER</label><br>
      <input type="text" name="user" /><br>
      <label>PASS</label><br>
      <input type="text" name="pass" /><br>
      <button type="submit"  name="add">ADD</button>
      <button type="button" onclick="refreshPage()" >Load lại trang</button>
    </form>
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
           <a href="updatekh.php?Ma_KH=<?= $row["Ma_KH"]; ?>" class="btn btn-primary btn-sm">
             <i class="bi bi-pencil-square"></i>
           </a>&nbsp;
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
    <?php 
    
    include "../config/config.php";
    if(isset($_POST['add'])){

    $a = isset($_POST['makh']) ? $_POST['makh'] : 0;
    $b = isset($_POST['tenkh']) ? $_POST['tenkh'] : 0;
    $c = isset($_POST['sdt']) ? $_POST['sdt'] : 0;
    $d = isset($_POST['diachi']) ? $_POST['diachi'] : 0;
    $e = isset($_POST['email']) ? $_POST['email'] : 0;
    $f = isset($_POST['user']) ? $_POST['user'] : 0;
    $g = isset($_POST['pass']) ? $_POST['pass'] : 0;
    
    $sql = "INSERT INTO `khachhang`(`Ma_KH`, `Ten_KH`, `SDT`, `DiaChi`, `Email`, `user`, `pass`) 
    VALUES ('$a','$b','$c','$d','$e','$f','$d')";
    $result = $mysqli->query($sql);
    if($result === TRUE){
        echo "THÊM RECORD THÀNH CÔNG :)))";
        
    }else{
        echo "THÊM RECORD THAT BAI :(((";
    }

    }
    $mysqli->close();
            
    ?>
</div>
<script>
    function refreshPage()
        {
            window.location.reload(); 
        }
</script>