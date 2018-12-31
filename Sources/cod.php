<?php 
require("header.php");
?>
<br>
<br>

<!-- slide show -->
<div class="container">
<div class="row">
    < <?php
 
 require("config.php");
 $result=mysqli_query($conn , "select * from imageslide");

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
                            echo"<p style='font-size:20px;'>
                        Fshare : <a href='$data[download]'>$data[download]</a>
                        <br>
                        <br>
                        4share : <a href='$data[download]'>$data[download]</a>
                        <br>
                        <br>

                        <strong> Crack Fix</strong> : <a href='http://turboagram.com/HppX'>http://turboagram.com/HppX</a>
                    </p>";
                echo"</div>";
                mysqli_close($conn);
                ?>
            </div>
            
        </div>
    </div>
</div>

</div>
</div>
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
    SELECT a.news_id, a.title, b.cate_title FROM news as a , category as b WHERE a.cate_id=b.cate_id
    <div>
