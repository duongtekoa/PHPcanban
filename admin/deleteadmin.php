<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body{
            background-color: rgb(228, 133, 133);

        }
        table{
            width: 700px;
        }
        img{
          width: 100px;
          height: 100px;
        }
    </style>
</head>
<body>

 
        
        <?php 
        include "../config/config.php";
        
 echo "<br>";

if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
if (isset($_GET["user"]) && !empty(trim($_GET["user"]))) {
    // Get id from url
    $user = trim($_GET["user"]);
    echo "OK Lấy đc USER trên URL là :))" . "$user" . "<br>";
}else{
    echo "ko lấy đc id url rồi dc r :(((" . "<br>";
}

// Câu SQL lấy danh sách
$sql = "DELETE  FROM `admin` WHERE user = '$user'";
 

if($result = $mysqli->query($sql) === true){
    echo "OK ĐÃ XÓA XONG :)))";
};
 


    
    
 

$mysqli->close();
        

        ?>

        
                
        
           
        
        
       
      
</body>
</html>