<?php
$id=$_GET["id"];
// mở kết nối cơ sở dữ liệu
require("config.php");
//Thực hiện câu truy vấn
mysqli_query($conn , "delete from news where news_id=$id");
//Đóng kết nối
header("location:list_article.php");
exit();
mysqli_close($conn);
?>