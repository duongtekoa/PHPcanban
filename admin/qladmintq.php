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
<form class="fo" action="qladmintq.php" method="post">
      <label>USER</label><br>
      <input type="text" name="user" /><br>
      <label>PASS</label><br>
      <input type="text" name="pass" /><br>
      
    <select name="quyen">
    <option value="0">CHỌN QUYỀN:</option>
    <option value="quản lí tổng quát">quản lí tổng quát</option>
    <option value="sửa">sửa</option>
    <option value="xem">xem</option>
    <option value="xóa">xóa</option>
    <option value="quản lí sản phẩm">quản lí sản phẩm</option>
    <option value="quản lí khách hàng">quản lí khách hàng</option>
    <option value="quản lí đơn hàng">quản lí đơn hàng</option>
    
  </select>
      
      <button type="submit"  name="add">ADD</button>
      <button type="button" onclick="refreshPage()" >Load lại trang</button>
    </form>
    <table border="1px">
        <tr>
            <td>USER</td>
            <td>PASS</td>
            <td>QUYỀN</td>
            
        </tr>
        <?php 
        include "../config/config.php";
        
       $sqlsl = "SELECT * FROM `admin`";
       $resulta = $mysqli->query($sqlsl);
       if($row = mysqli_fetch_row($resulta) >0){
        echo "có dữ liệu trong sql";
         while($row = $resulta->fetch_assoc()){  ?>
             <tr>
     <td><?php echo $row['user']?></td>
     <td><?php echo $row['pass']?></td>
     
     <td><?php echo $row['quyen']?></td>
     
     <td>
           <a href="readadmin.php?user=<?= $row["user"]; ?>" class="btn btn-info btn-sm">
             <i class="bi bi-eye-fill"></i>
           </a>&nbsp;
           <a href="updateadmin.php?user=<?= $row["user"]; ?>" class="btn btn-primary btn-sm">
             <i class="bi bi-pencil-square"></i>
           </a>&nbsp;
           <a href="deleteadmin.php?user=<?= $row["user"]; ?>" class="btn btn-danger btn-sm">
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

    $a = isset($_POST['user']) ? $_POST['user'] : 0;
    $b = isset($_POST['pass']) ? $_POST['pass'] : 0;
    $c = isset($_POST['quyen']) ? $_POST['quyen'] : 0;
    
    
    $sql = "INSERT INTO `admin`(`user`, `pass`, `quyen`) VALUES ('$a','$b','$c')";
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