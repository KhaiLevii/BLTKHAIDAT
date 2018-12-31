<?php
require("headeradmin.php");
$loi=array();
$loi["gamename"]=$loi["image"]=NULL;
$gamename=$image=NULL;
if(isset($_POST["ok"]))
{
    $cate_id=$_POST["txtcate"];
    if ($_POST["txtname"]==NULL)
        {
            $loi["gamename"]="* Xin vui lòng nhập tên game mới <br/>";
        }
    else
    {
        $gamename=$_POST["txtname"];
    }
    if($_FILES['imagegame']['error']>0)
        {
            $loi['image']='* Xin vui lòng chọn hình ảnh cho game <br/>';
        }
    else
        {
            $image=$_FILES['imagegame']['name'];
        }

        if (isset($gamename,$image))
        {
            require("config.php");
            $insertData = "INSERT INTO indexs(title_game,imagegame,cate_id) VALUES('$gamename','$image','$cate_id')";
            $query=mysqli_query($conn,$insertData);
            mysqli_close($conn);
         
        }
}
?>
<div id="wrapper2">
    <fieldset style="width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Thêm game</legend>
        <form action="add_index.php" method="post" enctype="multipart/form-data">
            <table style="margin:10px 20px;">
            <tr>
                    <td>Chuyên mục</td>
                    <td>
                        <select name="txtcate">
                        <?php
                        require("config.php");
                        $result=mysqli_query($conn, "SELECT cate_id,cate_title from category");
                       while($data=mysqli_fetch_assoc($result))
                       {
                           echo "<option value='$data[cate_id]'>$data[cate_title]</option>";
                       }
                           mysqli_close($conn);
                            ?>
                        </select>
                    </td>
                </tr>
                <tr style="line-height: 30px;">
                    <td>Tên Game</td>
                    <td><input type="text" size="25" style="padding:2px;" name="txtname"></td>
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td><input type="file" size="25" name="imagegame"></td>
                    
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
    echo $loi["gamename"];
    echo $loi["image"];
    ?>
</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>