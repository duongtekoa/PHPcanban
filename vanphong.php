<?php
session_start();
include "config/config.php";

?>



<?php 
include "include/header.php";
include "include/aside.php";
?>
<article>
    <?php
    include "config/config.php";
    
    
    
    


    echo "<br>";
         $sqlread = "SELECT * FROM `sanpham` WHERE Ma_DM = 13";
         $resulta = $mysqli->query($sqlread);
         $dem = 0;
         if($resulta->num_rows > 0 ){
          
           while($row = $resulta->fetch_assoc()){ $masanpham =  $row['Ma_SP']; $dem++ ?>
               
    <div class="sanpham">
       <h3><?php echo $row['Ten_SP']?></h3>
       
       <img src="admin/<?php echo $row['HinhAnh']?>" alt="" /></br>
       
      <p class="gm"> Giá Mới: <?php echo $row['Gia'];?> </p></br>
      <p class="gc"> Giá Cũ: <del> <?php echo $row['GiaCu'];?> </del> </p></br> 
      <form method="post" action="vanphong.php?Ma_SP=<?= $row['Ma_SP'] ?>">
      <input type="hidden" value="<?php echo $row['Ma_SP']?>"   name="one"/>
      <input type="hidden" value="<?php echo $row['HinhAnh']?>" name="two" />
      <input type="hidden" value="<?php echo $row['Ten_SP']?>"  name="three"/>
      <input type="hidden" value="<?php echo $row['Gia']?>"     name="four"/>
      
      
       <button type="submit" name="add_<?php echo $row['Ma_SP'] ?>">ADD TO CARD</button>
      </form>
    </div>
           
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
    
    

</article>

<?php 
include "include/footer.php";
include "include/click.php";
?>


