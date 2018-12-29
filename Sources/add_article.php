<?php
require("headeradmin.php");
$loi = array();
$loi['title']=$loi['image']= $loi['introduce']=$loi['content']=$loi['download']=NULL;
$title=$image=$introduce=$content=$download=NULL;
if(isset($_POST["ok"]))
{
    $cate_id=$_POST["txtcate"];
    if ($_POST['txttitle']==NULL)
        {
            $loi["title"]="* Xin vui lòng nhập vào tiêu đề mới <br/>";
        }
    else
        {       
            $title=$_POST['txttitle'];
        }
    if($_FILES["image"]["error"]>0)
        {
            $loi["image"]="* Xin vui lòng chọn hình ảnh cho vài viết <br/>";
        }
    else
        {
            $image=$_FILES["image"]["name"];
        }
    if ($_POST['txtintroduce']==NULL)
        {
            $loi['introduce'] = '* Xin vui lòng mô tả bài viết <br/>';
        }
    else
        {
            $introduce=$_POST['txtintroduce'];
        }
    if ($_POST['txtcontent']==NULL)
        {
            $loi['content']= "* Xin vui lòng nhập nội dung bài viết <br/>";
        }
    else
        {
            $content=$_POST['txtcontent'];
        }
    if ($_POST['txtdownload']==NULL)
        {
            $loi['download']="* Xin vui lòng chèn link download <br/>";
        }
    else
        {
            $download=$_POST['txtdownload'];
        }
    if (isset($title,$image,$introduce,$content,$download))
        {
            require("config.php");
            $insertData = "INSERT INTO news(title,image,introduce,content,download,cate_id) VALUES('$title','$image','$introduce','$content','$download','$cate_id')";
            $query=mysqli_query($conn,$insertData);
            mysqli_close($conn);
         
        }
}
?>
<div id=wrapper2>
    <fieldset style="width:1000px;margin:20px auto:10px;margin-left:-17%;padding:40px;">
        <legend style="text-align:center;">Thêm bài viết</legend>
        <form action="add_article.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Chuyên mục</td>
                    <td>
                        <select name="txtcate">
                            <option value="17">HÀNH ĐỘNG</option>
                            <option value="18">THỂ THAO</option>
                            <option value="19">PHIÊU LƯU</option>
                            <option value="20">SUPPORT</option>
                            <option value="21">YÊU CẦU UPLOAD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" size="70" name="txttitle"></td>
                   
                </tr>
                <tr>
                    <td>Hình ảnh</td>
                    <td><input type="file" size="25" name="image"></td>
                    
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><textarea id="" cols="72" rows="5" name="txtintroduce"></textarea></td>
                    
                </tr>
                <tr>
                    <td>Nội Dung</td>
                    <td><textarea id="" cols="72" rows="15" name="txtcontent"></textarea></td>
                 
                </tr>
                <tr>
                    <td>Link download game</td>
                    <td><input type="text" size="70" name="txtdownload"></td>
                   
                </tr>
                <tr>
                    <td></td>
                    <td><button class="add" name="ok">Add</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

</div>
<div>
<?php
 echo $loi["title"];
 echo $loi["image"];
 echo $loi["introduce"];
 echo $loi["content"];
 echo $loi["download"];  
?>
</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>