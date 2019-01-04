<?php 
require("header.php");
$idGame = $_GET['idGame'];
$loi = array();
$loi["name"]=$loi["mess"]=NULL;
$name = $mess = NULL;

if(isset($_POST["ok"]))
{
    if(empty($_POST["txtcodname"]))
    {
        $loi["name"] = "*Xin vui lòng nhập tên";
    }
    else
    {
        $name = $_POST["txtcodname"];
    }
    if(empty($_POST["txtcodmess"]))
    {
        $loi["mess"] = "*Xin vui lòng nhập bình luận của bạn";
    }
    else
    {
        $mess = $_POST["txtcodmess"];
    }
    if($name && $mess)
    {
        require("config.php");

        mysqli_query($conn,"insert into comment(name,message,time,cm_check,news_id) 
                                    value('$name','$mess',now(),'N','$idGame')");
        mysqli_close($conn);

        echo "<script>";
        echo "alert('Bình luận của bạn đã được gửi thành công và đang chờ để duyệt trước khi hiển thị lên trang')";
        echo"</script>";
    }

}
?>
<br>
<br>

<!-- slide show -->
<div class="container">
<div class="row">
<?php
 
 require("config.php");
 $result=mysqli_query($conn , "SELECT * FROM `imageslide` ORDER BY `imageslide`.`id` DESC");

$data=mysqli_fetch_assoc($result);
echo "<div class='col-md-12'>";
echo "<div class='carousel slide' id='carousel-916956'>";
echo    "<ol class='carousel-indicators'>
        <li data-slide-to='0' data-target='#carousel-916956'>
        </li>
        <li data-slide-to='1' data-target='#carousel-916956' class='active'>
        </li>
        <li data-slide-to='2' data-target='#carousel-916956' class='active'>
        </li>
      
    </ol> ";

 echo "<div class='carousel slide' id='carousel-916956'>";
 echo    "<ol class='carousel-indicators'>
         <li data-slide-to='0' data-target='#carousel-916956'>
         </li>
         <li data-slide-to='1' data-target='#carousel-916956' class='active'>
         </li>
         <li data-slide-to='2' data-target='#carousel-916956' class='active'>
         </li>
       
     </ol> ";
          echo "<div class='carousel-inner'>";
          
          echo "<div class='carousel-item active'>
          <a href='cod.php?idGame=$data[index_id]'>
              <img class='d-block w-100' alt='Carousel Bootstrap First' src='$data[image]' />
          </a>

      </div>";
     echo "</div> <a class='carousel-control-prev' href='#carousel-916956' data-slide='prev'><span class='carousel-control-prev-icon'></span>
     <span class='sr-only'>Previous</span></a> <a class='carousel-control-next' href='#carousel-916956'
     data-slide='next'><span class='carousel-control-next-icon'></span> <span class='sr-only'>Next</span></a>
</div>";
 echo "</div>";
 echo "</div>";
  echo "</div>";


 

mysqli_close($conn);
 ?>
</div>
</div>
<br>
<br>
<br> 
<!--title-->
<div class="container">
<div class="row">
<?php
    require("config.php");
    $result=mysqli_query($conn ,"select * from news where index_id='$_GET[idGame]'");
    $data=mysqli_fetch_assoc($result);
    echo "<div class='col-md-12'>";
      echo   "<h3 class='text-center' style='font-size:50px'>";
           echo "<fieldset>
            $data[title]
            </fieldset>";
       echo "</h3>";
    echo "</div>";
    mysqli_close($conn);
    ?>
</div>
</div>
<br>
<br>
<br>
<!-- nhung link youtube -->
<div class="container">
<div class="row">
<?php
    require("config.php");
    $result=mysqli_query($conn ,"select * from news where index_id='$_GET[idGame]'");
    $data=mysqli_fetch_assoc($result);

        echo "<div class='col-md-12'>";
        echo "<img alt='' src='' style='width:100%;' />";
        echo "<p style='font-size:20px;'>$data[content] </p>";
        echo "<iframe style='margin-left:13%;' width='800' height='400' src='$data[review]' 
            frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
            allowfullscreen></iframe>";
    echo"</div>";
    mysqli_close($conn);
    ?>
</div>
</div>
<br>
<br>
<br>
<!-- grid -->
<div class="container">

        <div class="tabbable" id="tabs-886087">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab1" data-toggle="tab">Cấu hình</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab2" data-toggle="tab">Download</a>
                </li>
            </ul>
            <div class="tab-content">
                <?php
                
                            
                        require("config.php");
                        $result=mysqli_query($conn ,"select * from news where index_id='$_GET[idGame]'");
                        $data=mysqli_fetch_assoc($result);
                       echo "<div class='tab-pane active' id='tab1' style='font-size:20px;'>
                       <span >$data[cauhinh]</span>                 
                        </div>";
                       echo "<div class='tab-pane' id='tab2'>";
                       if (isset($_SESSION['username']))
                            {
                                    echo"<p style='font-size:20px;'
                                    <br>
                                    <br>
                                    Fshare : <a href='$data[fshare]'>$data[fshare]</a>
                                    <br>
                                    <br>
                                    4share : <a href='$data[share4]'>$data[share4]</a>
                                    <br>
                                    <br>

                                    <strong> Crack Fix</strong> : <a href='$data[crack]'>$data[crack]</a>
                                    </p>";
                            }
                        else
                            {
                                    echo"<p style='font-size:20px;'
                                    <br>
                                    <br>          
                                    Fshare : <a href='login.php'>Xin vui lòng đăng nhập thành viên để tải game</a>
                                    <br>
                                    <br>
                                    4share : <a href='login.php'>Xin vui lòng đăng nhập thành viên để tải game</a>
                                    <br>
                                    <br>

                                    <strong> Crack Fix</strong> : <a href='login.php'>Xin vui lòng đăng nhập thành viên để tải game</a>
                                    </p>";
                            }
                        echo"</div>";
                        mysqli_close($conn);
                ?>
            </div>
            
        </div>
    </div>
</div>
</div>
</div>
<br>
<hr>
<div id="comment" style = "width:1000px;margin:20px auto:10px;margin-left:18%;padding:40px;">
<fieldset>
<legend><strong>Bình luận</strong></legend>
<form action = "cod.php?idGame=<?php echo $idGame; ?>" method = "post">
<table>
<tr>
<td> Họ tên </td>
<td><input type="text" size ="70" name = "txtcodname" value = "<?php echo $loi['name']; ?>"/></td>
</tr>
<tr>

<td>Nội dung</td>
<td><textarea id="" cols="72" rows="5" name="txtcodmess"></textarea></td>

</tr>
<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'txtcodmess', {
filebrowserBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html',
filebrowserImageBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Images',
filebrowserFlashBrowseUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/ckfinder.html?type=Flash',
filebrowserUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl: 'http://localhost:81/dangkhai/BTLKHAIDAT/Sources/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
} ); 
</script>
<tr>
<td></td>
<td><input type="submit" value = "Đăng" name = "ok"></td>
</tr>
</table>

 </form>
</fieldset>
</div>
<div id = "show-comment" style = "margin-left : 120px;margin-top : 40px;">
<?php
    require("config.php");
    $result3 = mysqli_query($conn,"select name,message,time from comment where cm_check='Y' and news_id = $idGame ");
    while($data3 = mysqli_fetch_assoc($result3))
    {
    echo "<div class ='comm'>";
    echo    "<img src='user.png' width = '60px' style = 'float: left; border:1px solid #CCC; padding: 2px;'/>";
    echo   "<div class ='mess' style = 'float: left; margin-left:10px; '>";
    echo    "<p style='color: aqua'> $data3[name] <span style='color: #999'>$data3[time]</p>";
    echo    "<p>$data3[message]</p>";
    echo    "</div>";
    echo    "<div style='clear:left'></div>";
    echo "</div>";
    }
    mysqli_close($conn);
?>
</div>
<br>
<br>
<br>
<hr>
<h1 style="text-align:center;height:50px;">Game cùng thể loại</h1>
<div class="row">
                <?php
                    require("config.php");
                    $result=mysqli_query($conn , "select * from indexs where cate_id=$data[cate_id]");
                   while ($data=mysqli_fetch_assoc($result))
                   {
                    echo "<div class='col-md-4'>";
                    echo "<br/>";
                    echo " <img alt='Bootstrap Image Preview' src='$data[imagegame]' />";
                    echo  "<a href='cod.php?idGame=$data[index_id]'>$data[title_game]</a>";
                    echo "</div>";
                   }
                  mysqli_close($conn);
                ?>
        
        </div>
<hr>
<div>
    <div class="row">
        <div class="col-md-12">

            <address>
                <strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây Sơn<br /> Quận
                Đống Đa, Thành phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
            </address>
        </div>
    </div>
    <div>
