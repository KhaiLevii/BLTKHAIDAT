<?php 

require("header.php");
?>

<br>
<br>
<!-- slide show -->
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
<br>
<br>
<br>
<!-- game list -->
<div class="row">
<?php
                    echo "<p style='margin:20px 0 0 10px;text-align:center;'class='form-control mr-sm-2'>Các trò chơi mới nhất được cập nhật </p>";
                    require("config.php");
                if(isset($_GET["begin"]))
                    {
                        $position=$_GET["begin"];
                    }
                else
                    {
                        $position=0;
                    }
                     $display=2;
                    $result=mysqli_query($conn , "SELECT * FROM `indexs` ORDER BY `indexs`.`index_id` DESC limit $position,$display");
                   while ($data=mysqli_fetch_assoc($result))
                   { 
                    echo "<div class='col-md-4'>";
                    echo "<br/>";
                    echo " <img alt='' src='$data[imagegame]' />";
                    echo  "<a href='cod.php?idGame=$data[index_id]'>$data[title_game]</a>";
                    echo "</div>";
                   }
                  mysqli_close($conn);
                ?>
</div>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-12">
    <?php
    require("config.php");
    $result=mysqli_query($conn,"SELECT * FROM `indexs` ORDER BY `indexs`.`index_id` DESC");
    $sum_indexs=mysqli_num_rows($result);
    $sum_page=ceil($sum_indexs/$display);
       echo" <nav>";
       if ($sum_page>1)
       {
         echo" <ul class='pagination'>";
        $current=($position/$display)+1;
        if($current!=1)
            {
                $prev= $position-$display;
                echo"<li class='page-item'>
                    <a class='page-link' href='index.php?id=1&begin=$prev' >Previous</a>
                     </li>";
            }
         for($page=1;$page<=$sum_page;$page++)
             {
                 $begin=($page-1)*$display;
                 if ($page==$current)
                 {
                    echo"<li class='page-item'>
                            <a class='page-link' href='index.php?id=1&begin=$begin' style='background-color:LightGray'>$page</a>
                        </li>";
                 }
                 else
                 {
                    echo"<li class='page-item'>
                    <a class='page-link' href='index.php?id=1&begin=$begin'>$page</a>
                     </li>";
                 }
            }
        if($current!=$sum_page)
            {
                $next=$position+$display;
                echo"<li class='page-item'>
                <a class='page-link' href='index.php?id=1&begin=$next'>Next</a>
                 </li>"; 
            }
        echo"</ul>";
        }
        echo"</nav>";
        mysqli_close($conn);
        ?>
        <hr>
        <div>
            <div class="row">
                <div class="col-md-12">

                    <address>
                        <strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây Sơn<br />
                        Quận Đống Đa, Thành phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
                    </address>
                </div>
            </div>
        </div>
    </div>


    </body>

    </html>