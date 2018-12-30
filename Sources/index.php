<?php 

require("header.php");
?>

<br>
<br>
<!-- slide show -->
<div class="row">
    <?php
 
    require("config.php");
    $result=mysqli_query($conn , "select imagetop from indexs");

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
             <a href='fifa19.php'>
                 <img class='d-block w-100' alt='Carousel Bootstrap First' src='$data[imagetop]' />
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
                    require("config.php");
                    $result=mysqli_query($conn , "select index_id,title_game,imagegame from indexs");
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
        <nav>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="index.php">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
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