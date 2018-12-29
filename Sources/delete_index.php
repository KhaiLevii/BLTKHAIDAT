<?php
$id=$_GET["id"];
// mở kết nối cơ sở dữ liệu
require("config.php");
//Thực hiện câu truy vấn
mysqli_query($conn , "delete from indexs where index_id=$id");
//Đóng kết nối
header("location:list_index.php");
exit();
mysqli_close($conn);
?>
