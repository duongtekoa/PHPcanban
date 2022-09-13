<?php
session_start();
ob_start();

$u = $_SESSION['us'];


$case = $_SESSION['quyen'];

include "headad.php";
echo "<nav>
        <ul>
            <li><a href=\"qlsp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>Quản lí sản phẩm</a></li>
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
<form class="fo" action="qlsp.php" method="post" enctype="multipart/form-data">
      <label>Mã Sản Phẩm</label><br>
      <input type="text" name="masp" /><br>
      <label>Tên Sản Phẩm</label><br>
      <input type="text" name="tensp" /><br>
      <label>Hình Ảnh</label><br>
      <input type="file" name="ha" /><br>
      <label>Giá</label><br>
      <input type="text" name="gia" /><br>
      <label>Giá Cũ</label><br>
      <input type="text" name="giacu" /><br>
      <label>Mô Tả</label><br>
      <input type="text" name="mota" /><br>
      <label>Mã Danh Mục</label><br>
      <input type="text" name="madm" /><br>
      <button type="submit"  name="add">ADD</button>
      <button type="button" onclick="refreshPage()" >Load lại trang</button>
    </form>
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
           <a href="update.php?Ma_SP=<?= $row["Ma_SP"]; ?>" class="btn btn-primary btn-sm">
             <i class="bi bi-pencil-square"></i>
           </a>&nbsp;
           <a href="delete.php?Ma_SP=<?= $row["Ma_SP"]; ?>" class="btn btn-danger btn-sm">
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

    $a = isset($_POST['masp']) ? $_POST['masp'] : 0;
    $b = isset($_POST['tensp']) ? $_POST['tensp'] : 0;
    $c = $_FILES['ha']["name"];
    $d = isset($_POST['gia']) ? $_POST['gia'] : 0;
    $e = isset($_POST['giacu']) ? $_POST['giacu'] : 0;
    $f = isset($_POST['mota']) ? $_POST['mota'] : 0;
    $g = isset($_POST['madm']) ? $_POST['madm'] : 0;
    
    $sql = "INSERT INTO `sanpham`(`Ma_SP`, `Ten_SP`, `HinhAnh`, `Gia`, `GiaCu`, `MoTa`, `Ma_DM`) 
    VALUES ('$a','$b','$c','$d','$e','$f','$g')";
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
<?php 
    include "../include/footer.php";
?>
    