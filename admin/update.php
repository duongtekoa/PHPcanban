<?php
include "headad.php"
?>
    <?php
        include "../config/config.php";
        echo "<br>";
       
         
        if (isset($_GET["Ma_SP"]) && !empty(trim($_GET["Ma_SP"]))) {
            // Get id from url
            $masanpham = trim($_GET["Ma_SP"]);
            echo "OK Lấy đc id trên URL là :))" . "$masanpham" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

        $sql = "SELECT * FROM sanpham WHERE Ma_SP = $masanpham";

        $result = $mysqli->query($sql);
 

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) {
        
        $ma =  $row["Ma_SP"] ;
        $ten =  $row["Ten_SP"] ;
        $hinhanh =  $row["HinhAnh"]; 
        $gia =  $row["Gia"]; 
        $giacu =  $row["GiaCu"];
        $mota =  $row["MoTa"] ;
        $danhmuc = $row["Ma_DM"] ;

        
    }
        
}
else {
    echo "Không có record nào";
}


 

        ?>
    
    <form  action="update.php?Ma_SP=<?= $masanpham; ?>" method="post" enctype="multipart/form-data">
        <label>Mã sản phẩm</label><br>
        <input type="text" name="maspud" value="<?php echo $ma ?>"/><br>
        <label>Tên sản phẩm</label><br>
        <input type="text" name="tenspud" value="<?php echo $ten ?>"/><br>
        <label>Hình ảnh</label><br>
        <input type="file" name="fileud" value="<?php echo $hinhanh ?>"/><br>
        <label>Giá</label><br>
        <input type="number" name="giaud" value="<?php echo $gia ?>"/><br>
        <label>Mô Tả</label><br>
        <input type="number" name="giacuud" value="<?php echo $giacu ?>"/><br>
        <label>Mô Tả</label><br>
        <input type="text" name="motaud" value="<?php echo $mota ?>"/><br>
        <label>Mã danh mục</label><br>
        <input type="number" name="madmud" value="<?php echo $danhmuc ?>"/><br>
        
        <button type="submit" name="update" value="add" >Cập nhật CSDL</button>
        
        <br><br><br>
        
    </form>
    
    

  
    <?php 
    

        $a = isset($_POST['maspud']) ? $_POST['maspud'] : 0;
        $b = isset($_POST['tenspud']) ? $_POST['tenspud'] : 0;
        $c = $_FILES['fileud']['name'];
        $d = isset($_POST['giaud']) ? $_POST['giaud'] : 0;
        $dd = isset($_POST['giacuud']) ? $_POST['giacuud'] : 0;
        $e = isset($_POST['motaud']) ? $_POST['motaud'] : 0;
        $f = isset($_POST['madmud']) ? $_POST['madmud'] : 0;

        echo $a . "<br>";
        echo $b . "<br>";
        echo $c . "<br>";
        echo $d . "<br>";
        echo $e . "<br>";
        echo $f . "<br>";

        if (isset($_POST['update'])){
        $sqll = "UPDATE `sanpham` SET `Ma_SP`='$a',`Ten_SP`='$b',`HinhAnh`='$c',`Gia`='$d',`GiaCu`='$dd',`MoTa`='$e',`Ma_DM`='$f' WHERE Ma_SP = $masanpham";
       if ($resultkq = $mysqli->query($sqll) === TRUE ){
        echo "OK update thanh cong :)))";
       }else{
        echo "That bai roi :(((";
       };
    }
    ?>

<?php 
    include "../include/footer.php";
?>