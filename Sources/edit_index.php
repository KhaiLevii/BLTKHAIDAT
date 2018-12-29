<?php
require("headeradmin.php");
$id=$_GET["id"];
$loi=array();
$loi["catename"]=NULL;
$catename=NULL;
if (isset($_POST["ok"]))
{
    if($_POST["txtname"]==NULL)
    {
        $loi["catename"]="* Xin vui lòng nhập tên game cần chỉnh sửa.";
    }
    else
    {
        $catename=$_POST["txtname"];
    }
    if(isset($catename))
    {
        require("config.php");
        mysqli_query($conn , "update indexs set title_game='$catename' where index_id=$id");
        mysqli_close($conn);
        header("location:list_index.php");
        exit();
    }
}
require("config.php");
$result=mysqli_query($conn , "select title_game from indexs where index_id=$id");
$data=mysqli_fetch_assoc($result);
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Chỉnh sửa tên game</legend>
        <form action="edit_index.php?id=<?php echo $id;?>" method="post">
            <table style="margin:10px 20px;">
                <tr style="line-height: 30px;">
                    <td>Name:</td>
                    <td><input type="text" size="25" style="padding:2px;" value="<?php echo $data['title_game'];?>" name="txtname" ></td>
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
