<?php 
include "config/config.php";
echo "<br>";

$sql = "SELECT * FROM sanpham";
 
// Thực thi câu truy vấn và gán vào $result
$result = $mysqli->query($sql);
 
// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
if ($result->num_rows > 0) 
{
    // Sử dụng vòng lặp while để lặp kết quả
    while($row = $result->fetch_assoc()) {
        echo "Ma san pham: " . $row["Ma_SP"]. " - Ten san pham: " . $row["Ten_SP"]. "Hinh anh" .$row["HinhAnh"]. "Gia la" .$row["Gia"]. "Mo ta:" .$row["MoTa"]. "Ma danh muc:" .$row["Ma_DM"]."<br>";
    }
} 
else {
    echo "Không có record nào";
}
 
// ngắt kết nối
$mysqli->close();
?>