<?php
require("headeradmin.php");
$loi=array();
$loi["image"]=NULL;
$image=NULL;
if(isset($_POST["ok"]))
{
    if($_FILES['imageindex']['error']>0)
        {
            $loi['image']='* Xin vui lòng chọn hình ảnh cho trang chủ <br/>';
        }
    else
        {
            $image=$_FILES['imageindex']['name'];
        }

        if (isset($image))
        {
            require("config.php");
            $insertData = "INSERT INTO indexs(imagetop) VALUES('$image')";
            $query=mysqli_query($conn,$insertData);
            mysqli_close($conn);
         
        }
}
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Thêm image trang chủ</legend>
        <form action="add_imageindex.php" method="post" enctype="multipart/form-data">
            <table style="margin:10px 20px;">
                <tr>
                    <td>Hình ảnh</td>
                    <td><input type="file" size="25" name="imageindex"></td>
                    
                </tr>
                <tr style="line-height: 30px;">
                    <td></td>
                    <td><button class="add" name="ok">Add</button></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
<div style="width:290px; margin:10px auto; text-align:center; color:red;">
    <?php
    echo $loi["image"];
    ?>
</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>
