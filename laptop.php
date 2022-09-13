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
                // PHẦN XỬ LÝ PHP
                // BƯỚC 1: KẾT NỐI CSDL
        $conn = mysqli_connect('localhost', 'root', '', 'csdl_bh');
         
        // BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query( $conn,'select count(Ma_SP) as total from sanpham where Ma_DM = 1');
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
         
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;                                  
        $limit = 3;
         
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
         
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
         
        // Tìm Start
        $start = ($current_page - 1) * $limit;
         
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $result = mysqli_query($conn, "SELECT * FROM sanpham WHERE Ma_DM = 1 LIMIT $start, $limit ");
                ?>
        <div>
            <?php 
            // PHẦN HIỂN THỊ TIN TỨC
            // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
        while ($row = mysqli_fetch_assoc($result)){ ?>
        
        <div class="sanpham">
       <h3><?php echo $row['Ten_SP']?></h3>
       
       <img src="admin/<?php echo $row['HinhAnh']?>" alt="" /></br>
       
      <p class="gm"> Giá Mới: <?php echo $row['Gia'];?> </p></br>
      <p class="gc"> Giá Cũ: <del> <?php echo $row['GiaCu'];?> </del> </p></br> 
      <form method="post" action="laptop.php?page=<?=($current_page)?>?Ma_SP=<?= $row['Ma_SP'] ?>">
      <input type="hidden" value="<?php echo $row['Ma_SP']?>"   name="one"/>
      <input type="hidden" value="<?php echo $row['HinhAnh']?>" name="two" />
      <input type="hidden" value="<?php echo $row['Ten_SP']?>"  name="three"/>
      <input type="hidden" value="<?php echo $row['Gia']?>"     name="four"/>
      
      
       <button type="submit" name="add_<?php echo $row['Ma_SP'] ?>">ADD TO CARD</button>
      </form>
    </div>
       
 <?php
        }
            ?>
        </div>
        <div class="pagination">
           <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
           // BƯỚC 7: HIỂN THỊ PHÂN TRANG
           echo "<br>";
        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
          
            echo '<a href="laptop.php?page='.($current_page-1).'">Prev</a> | ';
        }
         
        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="laptop.php?page='.$i.'">'.$i.'</a> | ';
            }
        }
         
        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="laptop.php?page='.($current_page+1).'">Next</a> | ';
        }
                   ?>
        </div>
    

</article>

<?php 
include "include/footer.php";
include "include/click.php";
?>


