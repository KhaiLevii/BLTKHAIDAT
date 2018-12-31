<?php
require("headeradmin.php");
$id=$_GET["id"];
$loi['title']=$loi['image']= $loi['introduce']=$loi['content']=$loi['review']=$loi['cauhinh']=$loi['download']=NULL;
$title=$image=$introduce=$content=$download=$review=$cauhinh=NULL;
if (isset($_POST['ok']))
{
    $cate_id=$_POST['txtcate'];
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
        $image="none";
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
    if ($_POST['txtreview']==NULL)
    {
        $loi['review']="* Xin vui lòng chèn link review game <br/>";
        
    }
    else
    {
        $review=$_POST['txtreview'];
    }
    if ($_POST['txtcauhinh']==NULL)
    {
        $loi['cauhinh'] = "* Xin vui lòng mô tả cấu hình máy <br/>";
    }
    else
    {
        $cauhinh=$_POST['txtcauhinh'];
    }
    if ($_POST['txtdownload']==NULL)
    {
        $loi['download']="* Xin vui lòng chèn link download <br/>";
    }
    else
    {
        $download=$_POST['txtdownload'];
    }

    if (isset($title,$image,$introduce,$content,$review,$cauhinh,$download))
    {
        require("config.php");
        if ($image=='none')
        {
            mysqli_query($conn , "UPDATE news set cate_id='$cate_id',title='$title',introduce='$introduce',content='$content',review='$review',cauhinh='$cauhinh',download='$download' WHERE news_id=$id");
        }
        else
        {
            mysqli_query($conn , "UPDATE news set cate_id='$cate_id',title='$title',image='$image',introduce='$introduce',content='$content',review='$review',cauhinh='$cauhinh',download='$download' WHERE news_id=$id");
        }
     mysqli_close($conn);
     header("location:list_article.php");
     exit();
    }
}
require("config.php");
$result=mysqli_query($conn, "select cate_id, title,image,introduce,content,review,cauhinh,download from news where news_id=$id");
$data=mysqli_fetch_assoc($result);
?>
<div id=wrapper2>
    <fieldset style="width:1000px;margin:20px auto:10px;margin-left:-5%;padding:40px;">
        <legend style="text-align:center;">Thêm bài viết</legend>
        <form action="edit_article.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Chuyên mục</td>
                    <td>
                        <select name="txtcate">
                        <?php
                        require("config.php");
                        $result2=mysqli_query($conn, "SELECT cate_id,cate_title from category");
                       while($data2=mysqli_fetch_assoc($result2))
                       {
                        if($data['cate_id']==$data2['cate_id'])
                        {
                           echo "<option value='$data2[cate_id]' selected='selected'>$data2[cate_title]</option>";
                        }
                        else
                        {
                            echo "<option value='$data2[cate_id]' >$data2[cate_title]</option>";
                        }
                       }
                           mysqli_close($conn);
                            ?>
                          
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" size="70" name="txttitle" value="<?php echo $data['title'];?>"></td>
                   
                </tr>
                <tr>
                <td>Hình ảnh game cũ</td>
                <td><img src="<?php echo $data['image'];?>"></td>
                </tr>
                <tr>
                    <td>Hình ảnh Game mới</td>
                    <td><input type="file" size="25" name="image"></td>
                    
                </tr>
                <tr>

                    <td>Mô tả</td>
                    <td><textarea id="" cols="72" rows="5" name="txtintroduce" ><?php echo $data['introduce'];?></textarea></td>
                    
                </tr>
                <tr>
                    <td>Nội Dung</td>
                    <td><textarea id="" cols="72" rows="15" name="txtcontent"><?php echo $data['content'];?></textarea></td>
                 
                </tr>
                <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'txtcontent', {
      filebrowserBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
     } ); 
            </script>
                <tr>
                    <td>Link review game</td>
                    <td><input type="text" size="70" name="txtreview" value="<?php echo $data['review'];?>"></td>
                   
                </tr>
                <tr>

                    <td>Chi tiết cấu hình</td>
                    <td><textarea id="" cols="72" rows="5" name="txtcauhinh"><?php echo $data['cauhinh'];?></textarea></td>
                    
                </tr>
                <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'txtcauhinh', {
      filebrowserBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
     } ); 
            </script>
                <tr>
                    <td>Link download game</td>
                    <td><input type="text" size="70" name="txtdownload" value="<?php echo $data['download'];?>"></td>
                   
                </tr>
                <tr>
                    <td></td>
                    <td><button class="add" name="ok">UPDATE</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>