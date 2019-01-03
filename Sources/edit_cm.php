<?php
require("headeradmin.php");
$id = $_GET["id"];

if(isset($_POST["ok"]))
{
    $check = $_POST["txtcheck"];
    require("config.php");
    mysqli_query($conn,"update comment set cm_check = '$check' where cm_id = $id");
    mysqli_close($conn);
    header("location:list_comment.php");
    exit();
}

?>

<div id="wrapper2">
    <fieldset style="style=width:27px;margin:20px auto 10px;">
        <legend style="text-align:center;">Xét bình luận</legend>
        <form action="edit_cm.php?id=<?php echo $id; ?>" method ="post" >
            <table style=" margin:10px 20px;">
                <tr style="line-height: 30px;">
                    <td>Duyệt comment</td>
                    <td>
                        <select name ="txtcheck"> 
                            <option value="N">Chưa duyệt</option>
                            <option value="Y">Đã duyệt</option>
                        </select>
                    </td>
                </tr>
                <tr style="line-height: 30px;">
                    <td></td>
                    <td><input type="submit" value="Update" name = "ok"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</div>



<div id="bottom">Copyright &copy; by sharing game to you</div>

</body>

</html>