<?php
require("headeradmin.php");
$loi=array();
$loi["catename"]=NULL;
$catename=NULL;
if(isset($_POST["ok"]))
{
    if (empty($_POST["txtname"]))
        {
            $loi["catename"]="* Xin vui lòng nhập tên danh mục mới";
        }
    else
    {
        $catename=$_POST["txtname"];
    }

    if ($catename)
    {
        require("config.php");
        mysqli_query($conn , "insert into category(cate_title) value('$catename')");
        mysqli_close($conn);
        header("location:list_category.php");
        exit();
    }
}
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Thêm chuyên mục</legend>
        <form action="add_category.php" method="post">
            <table style="margin:10px 20px;">
                <tr style="line-height: 30px;">
                    <td>Name:</td>
                    <td><input type="text" size="25" style="padding:2px;" name="txtname"></td>
                </tr>
                <tr style="line-height: 30px;">
                    <td></td>
                    <td><input type="submit" value="Add" style="padding:2px;" name="ok"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
<div style="width:290px; margin:10px auto; text-align:center; color:red;">
    <?php
    echo $loi["catename"];
    ?>
</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>