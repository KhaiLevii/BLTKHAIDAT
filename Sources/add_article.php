<?php
require("headeradmin.php");
$loi = array();
$loi['title']=$loi['image']= $loi['introduce']=$loi['content']=$loi['review']=$loi['cauhinh']=$loi['fshare']=$loi['share4']=$loi['crack']=NULL;
$title=$image=$introduce=$content=$fshare=$share4=$crack=$review=$cauhinh=NULL;
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
    if ($_POST['txtfshare']==NULL)
        {
            $loi['fshare']="* Xin vui lòng chèn link Fshare <br/>";
        }
    else
        {
            $fshare=$_POST['txtfshare'];
        }
        if ($_POST['txtshare4']==NULL)
        {
            $loi['share4']="* Xin vui lòng chèn link 4share <br/>";
        }
    else
        {
            $share4=$_POST['txtshare4'];
        }
        if ($_POST['txtcrack']==NULL)
        {
            $loi['crack']="* Xin vui lòng chèn link Crack <br/>";
        }
    else
        {
            $crack=$_POST['txtcrack'];
        }

    if (isset($title,$image,$introduce,$content,$review,$cauhinh,$fshare,$share4,$crack))
        {
            require("config.php");
            $insertData = "INSERT INTO news(title,image,introduce,content,review,cauhinh,fshare,share4,crack,cate_id) VALUES('$title','$image','$introduce','$content','$review','$cauhinh','$fshare','$share4','$crack','$cate_id')";
            $query=mysqli_query($conn,$insertData);
            mysqli_close($conn);
         
        }
}
?>
<div id=wrapper2>
    <fieldset style="width:1000px;margin:20px auto:10px;margin-left:-5%;padding:40px;">
        <legend style="text-align:center;">Thêm bài viết</legend>
        <form action="add_article.php" method="POST" enctype="multipart/form-data">
            <table>
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
                <tr>
                    <td>Tiêu đề</td>
                    <td><input type="text" size="70" name="txttitle"></td>
                   
                </tr>
                <tr>
                    <td>Hình ảnh Game</td>
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
                    <td><input type="text" size="70" name="txtreview"></td>
                   
                </tr>
                <tr>

                    <td>Chi tiết cấu hình</td>
                    <td><textarea id="" cols="72" rows="5" name="txtcauhinh"></textarea></td>
                    
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
                    <td>Link Fshare</td>
                    <td><input type="text" size="70" name="txtfshare"></td>
                   
                </tr>
                <tr>
                    <td>Link 4share</td>
                    <td><input type="text" size="70" name="txtshare4"></td>
                   
                </tr>
                <tr>
                    <td>Link Crack fix</td>
                    <td><input type="text" size="70" name="txtcrack"></td>
                   
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
 echo $loi["review"];
 echo $loi["cauhinh"];
 echo $loi["fshare"];
 echo $loi["share4"]; 
 echo $loi["crack"];   
?>
</div>
<div id="bottom">Copyright &copy; by sharing game to you</div>