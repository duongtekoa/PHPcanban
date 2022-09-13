<?php
include "headad.php"
?>
    <?php
        include "../config/config.php";
        echo "<br>";
       
         
        if (isset($_GET["user"]) && !empty(trim($_GET["user"]))) {
            // Get id from url
            $user = trim($_GET["user"]);
            echo "OK Lấy đc user trên URL là :))" . "$user" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

        $sql = "SELECT * FROM `admin` WHERE user = '$user'";

        $result = $mysqli->query($sql);
 

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) {
        
        $user =  $row["user"] ;
        $pass =  $row["pass"] ;
        
        $quyen =  $row["quyen"]; 
        

        
    }
        
}
else {
    echo "Không có record nào";
}


 

        ?>
    
    <form  action="updateadmin.php?user=<?= $user; ?>" method="post">
        <label>USER</label><br>
        <input type="text" name="userud" value="<?php echo $user ?>"/><br>
        <label>PASS</label><br>
        <input type="text" name="passud" value="<?php echo $pass ?>"/><br>
        
        <select name="quyenud">
    <option value="0">CHỌN QUYỀN:</option>
    <option value="quản lí tổng quát">quản lí tổng quát</option>
    <option value="sửa">sửa</option>
    <option value="xem">xem</option>
    <option value="xóa">xóa</option>
    <option value="quản lí sản phẩm">quản lí sản phẩm</option>
    <option value="quản lí khách hàng">quản lí khách hàng</option>
    <option value="quản lí đơn hàng">quản lí đơn hàng</option>
</select>
        <button type="submit" name="update" value="add" >Cập nhật CSDL</button>
        
        <br><br><br>
        
    </form>
    
    

  
    <?php 
    

        $a = isset($_POST['userud']) ? $_POST['userud'] : 0;
        $b = isset($_POST['passud']) ? $_POST['passud'] : 0;
        
        $c = isset($_POST['quyenud']) ? $_POST['quyenud'] : 0;
        

        echo $a . "<br>";
        echo $b . "<br>";
        echo $c . "<br>";
        

        if (isset($_POST['update'])){
        $sqll = "UPDATE `admin` SET `user`='$a',`pass`='$b',`quyen`='$c' WHERE user = '$user'";
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