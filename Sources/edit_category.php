<?php
require("headeradmin.php");
$id=$_GET["id"];
$loi=array();
$loi["catename"]=NULL;
$catename=NULL;
if (isset($_POST["ok"]))
{
    if(empty($_POST["txtname"]))
    {
        $loi["catename"]="* Xin vui lòng nhập tên danh mục cần chỉnh sửa.";
    }
    else
    {
        $catename=$_POST["txtname"];
    }
    if($catename)
    {
        require("config.php");
        mysqli_query($conn , "update category set cate_title='$catename' where cate_id=$id");
        mysqli_close($conn);
        header("location:list_category.php");
        exit();
    }
}
require("config.php");
$result=mysqli_query($conn , "select cate_title from category where cate_id=$id");
$data=mysqli_fetch_assoc($result);
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Chỉnh sửa chuyên mục</legend>
        <form action="edit_category.php?id=<?php echo $id;?>" method="post">
            <table style="margin:10px 20px;">
                <tr style="line-height: 30px;">
                    <td>Name:</td>
                    <td><input type="text" size="25" style="padding:2px;" value="<?php echo $data['cate_title'];?>" name="txtname" ></td>
                </tr>
                <tr style="line-height: 30px;">
                    <td></td>
                    <td><input type="submit" value="Update" style="padding:2px;" name="ok"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>
<?php
mysqli_close($conn);
?>
<div id="bottom">Copyright &copy; by sharing game to you</div>
