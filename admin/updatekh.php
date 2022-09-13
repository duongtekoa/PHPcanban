<?php
include "headad.php"
?>
    <?php
        include "../config/config.php";
        echo "<br>";
       
         
        if (isset($_GET["Ma_KH"]) && !empty(trim($_GET["Ma_KH"]))) {
            // Get id from url
            $makh = trim($_GET["Ma_KH"]);
            echo "OK Lấy đc id trên URL là :))" . "$makh" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

        $sql = "SELECT * FROM khachhang WHERE Ma_KH = $makh";

        $result = $mysqli->query($sql);
 

if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) {
        
        $makh =  $row["Ma_KH"] ;
        $tenkh =  $row["Ten_KH"] ;
        $sdt =  $row["SDT"] ; 
        $diachi =  $row["DiaChi"] ; 
        $email =  $row["Email"] ;
        $user = $row["user"] ;
        $pass = $row["pass"] ;

        
    }
        
}
else {
    echo "Không có record nào";
}


 

        ?>
    
    <form  action="updatekh.php?Ma_KH=<?= $makh; ?>" method="post" >
        <label>Mã khách hàng</label><br>
        <input type="text" name="makhud" value="<?php echo $makh ?>"/><br>
        <label>Tên khách hàng</label><br>
        <input type="text" name="tenkhud" value="<?php echo $tenkh ?>"/><br>
        
        <label>SDT</label><br>
        <input type="text" name="sdtud" value="<?php echo $sdt ?>"/><br>
        <label>Địa CHỉ</label><br>
        <input type="text" name="diachiud" value="<?php echo $diachi ?>"/><br>
        <label>EMAIL</label><br>
        <input type="text" name="emailud" value="<?php echo $email ?>"/><br>
        <label>USER</label><br>
        <input type="text" name="userud" value="<?php echo $user ?>"/><br>
        <label>PASS</label><br>
        <input type="text" name="passud" value="<?php echo $pass ?>"/><br>
        
        <button type="submit" name="update" value="add" >Cập nhật CSDL</button>
        
        <br><br><br>
        
    </form>
    
    

  
    <?php 
    

        $a = isset($_POST['makhud']) ? $_POST['makhud'] : 0;
        $b = isset($_POST['tenkhud']) ? $_POST['tenkhud'] : 0;
        $c = isset($_POST['sdtud']) ? $_POST['sdtud'] : 0;
        $d = isset($_POST['diachiud']) ? $_POST['diachiud'] : 0;
        $dd = isset($_POST['emailud']) ? $_POST['emailud'] : 0;
        $e = isset($_POST['userud']) ? $_POST['userud'] : 0;
        $f = isset($_POST['passud']) ? $_POST['passud'] : 0;

        echo $a . "<br>";
        echo $b . "<br>";
        echo $c . "<br>";
        echo $d . "<br>";
        echo $dd . "<br>";
        echo $e . "<br>";
        echo $f . "<br>";

        if (isset($_POST['update'])){
        $sqll = "UPDATE `khachhang` SET `Ma_KH`= '$a',`Ten_KH`= '$b',`SDT`= '$c',`DiaChi`= '$d',`Email`= '$dd',`user`= '$e' ,`pass`= '$f'  WHERE Ma_KH = $makh";
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