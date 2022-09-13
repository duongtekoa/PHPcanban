<?php
session_start();
ob_start();
include "../config/config.php";

$u = $_SESSION['us'];


$case = $_SESSION['quyen'];

switch ($case) {
    case "quản lí tổng quát":
        // chuỗi câu lênh
        include "headad.php";
        echo "<nav>
        <ul>
            <li><a href=\"qlsptq.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>Quản lí sản phẩm</a></li>
            <li><a href=\"qlkhtq.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Quản lí khách hàng</a></li>
            <li><a href=\"qldhtq.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>Quản lí đơn hàng</a></li>
            <li><a href=\"qladmintq.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Quản lí admin</a></li>
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

        break;
    case "quản lí sản phẩm":
        // chuỗi câu lênh
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

        break;
        break;
    case "quản lí đơn hàng":
        // chuỗi câu lênh
        echo "có thể quản lí đơn hàng";
        break;
    case "quản lí khách hàng":
        // chuỗi câu lênh
        include "headad.php";
        echo "<nav>
        <ul>
            
            <li><a href=\"qlkh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Quản lí khách hàng</a></li>
            
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
        break;
    case "xem":
       // chuỗi câu lênh
       include "headad.php";
       echo "<nav>
       <ul>
           <li><a href=\"xemsp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>Xem sản phẩm</a></li>
           <li><a href=\"xemkh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Xem khách hàng</a></li>
           <li><a href=\"xemdh.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>Xem đơn hàng</a></li>
           
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
       break;
    case "sửa":
       // chuỗi câu lênh
       include "headad.php";
       echo "<nav>
       <ul>
           <li><a href=\"suasp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>sửa sản phẩm</a></li>
           <li><a href=\"suakh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>sửa khách hàng</a></li>
           <li><a href=\"suadh.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>sửa đơn hàng</a></li>
           
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
       break;
    case "xóa":
        // chuỗi câu lệnh
        include "headad.php";
       echo "<nav>
       <ul>
           <li><a href=\"xoasp.php\"><img src=\"icon/vanchuyen1.png\" width=\"35px\" height=\"35px\"/><br>xóa sản phẩm</a></li>
           <li><a href=\"xoakh.php\"><img src=\"icon/icon_login.png\" width=\"35px\" height=\"35px\"/><br>Xóa khách hàng</a></li>
           <li><a href=\"xoadh.php\"><img src=\"icon/icondh.png\" width=\"35px\" height=\"35px\"/><br>xóa đơn hàng</a></li>
           
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
        break;
    
}
?>