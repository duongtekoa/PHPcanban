<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px">
        <tr>
            <td>USER</td>
            <td>PASS</td>
            <td>QUYỀN</td>
            
        </tr>
        <?php 
        include "../config/config.php";
        
        if (isset($_GET["user"]) && !empty(trim($_GET["user"]))) {
            // Get id from url
            $user = trim($_GET["user"]);
            echo "OK Lấy đc USER trên URL là :))" . "$user" . "<br>";
        }else{
            echo "ko lấy đc id url rồi dc r :(((" . "<br>";
        }

       $sqlread = "SELECT * FROM `admin` WHERE user = '$user'";
       $resulta = $mysqli->query($sqlread);
       if($resulta->num_rows > 0 ){
        echo "có dữ liệu trong sql";
         while($row = $resulta->fetch_assoc()){  ?>
             <tr>
     <td><?php echo $row['user']?></td>
     <td><?php echo $row['pass']?></td>
    
     <td><?php echo $row['quyen']?></td>
     
         </tr>
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
           
     
   
</body>
</html>