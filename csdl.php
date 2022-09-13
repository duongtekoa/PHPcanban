<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "config/config.php";
        ?>
    <form action="csdl.php" method="post" enctype="multipart/form-data">
        <label>Mã sản phẩm</label><br>
        <input type="number" name="masp"/><br>
        <label>Tên sản phẩm</label><br>
        <input type="text" name="tensp"/><br>
        <label>Hình ảnh</label><br>
        <input type="file" name="file"/><br>
        <label>Giá</label><br>
        <input type="number" name="gia"/><br>
        <label>Mô Tả</label><br>
        <input type="text" name="mota"/><br>
        <label>Mã danh mục</label><br>
        <input type="number" name="madm"/><br>
        <button type="submit" name="add" value="add">Thêm vào CSDL</button>
    </form>
    <?php
     if (isset($_POST['add'])){
        $masp = isset($_POST['masp']) ? $_POST['masp'] : '';
        $tensp = isset($_POST['tensp']) ? $_POST['tensp'] : '';
        $image = $image = $_FILES['file']['name'];
        $gia = isset($_POST['gia']) ? $_POST['gia'] : '';
        $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
        $madm = isset($_POST['madm']) ? $_POST['madm'] : '';
    
    
        echo $masp;
        echo $tensp;
        echo $image;
        echo $gia;
        echo $mota;
        echo $madm;


        $sql = "INSERT INTO `sanpham`(`Ma_SP`, `Ten_SP`, `HinhAnh`, `Gia`, `MoTa`, `Ma_DM`) VALUES ('$masp','$tensp','$image','$gia','$mota','$madm')";
 
        // Thực hiện thêm record
        if ($mysqli->query($sql) === TRUE) {
            echo "Thêm record thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $mysqli->error;
        }
        
        // Ngắt kết nối
        $mysqli->close();
            }
    ?>
</body>
</html>