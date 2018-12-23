<?php
require("headeradmin.php");
$id=$_GET["id"];
require("config.php");
$result=mysqli_query($conn , "select cate_title from category where cate_id=$id");
$data=mysqli_fetch_assoc($result);
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Chỉnh sửa chuyên mục</legend>
        <form action="add_category.php" method="post">
            <table style="margin:10px 20px;">
                <tr style="line-height: 30px;">
                    <td>Name:</td>
                    <td><input type="text" size="25" style="padding:2px;" value="<?php echo $data['cate_title'];?>" ></td>
                </tr>
                <tr style="line-height: 30px;">
                    <td></td>
                    <td><input type="submit" value="Update" style="padding:2px;"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
<?php
mysqli_close($conn);
?>
<div id="bottom">Copyright &copy; by sharing game to you</div>
