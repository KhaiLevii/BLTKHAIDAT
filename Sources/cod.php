<?php 
require("header.php");
?>
<br>
<br>

<!-- slide show -->
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="carousel slide" id="carousel-916956">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-916956">
                </li>
                <li data-slide-to="1" data-target="#carousel-916956" class="active">
                </li>
                <li data-slide-to="2" data-target="#carousel-916956">
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <a href="fifa19.php">
                        <img class="d-block w-100" alt="Carousel Bootstrap First" src="fifa19.jpeg" />
                    </a>

                </div>
                <div class="carousel-item active">
                <a href="cod.php">
                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="cod.jpeg" />

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Carousel Bootstrap Third" src="spider.jpeg" />

                </div>
            </div> <a class="carousel-control-prev" href="#carousel-916956" data-slide="prev"><span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-916956"
                data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
    </div>
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
    $result=mysqli_query($conn ,"select * from news where news_id=9");
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
    $result=mysqli_query($conn ,"select * from news where news_id=9");
    $data=mysqli_fetch_assoc($result);

        echo "<div class='col-md-12'>";
        echo "<img alt='Bootstrap Image Preview' src='$data[imagetop]' style='width:100%;' />";
        echo "<p style='font-size:20px;'><strong>$data[title]</strong>$data[content] </p>";
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

<div class="row">
    <div class="col-md-12">
    <div style="font-size:25px;text-align:center;">Một số hình ảnh về game</div>
    <br>
    <br>
    <br>
        <div class="carousel slide" id="carousel-843913">
            <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-843913" class="active">
                </li>
                <li data-slide-to="1" data-target="#carousel-843913">
                </li>
                <li data-slide-to="2" data-target="#carousel-843913">
                </li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" alt="Carousel Bootstrap First" src="codsl2.jpg" />

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Carousel Bootstrap Second" src="codsl1.jpg" />

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Carousel Bootstrap Third" src="codsl3.jpg" />

                </div>
            </div> <a class="carousel-control-prev" href="#carousel-843913" data-slide="prev"><span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-843913"
                data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>
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
                <div class="tab-pane active" id="tab1" style="font-size:20px;">
                        <br> 
                    OS: Windows 7 64-Bit or later
                        <br>
                        Processor: CPU: Intel® Core™ i3 3225 3.3 GHz or AMD Ryzen™ 5 1400
                        <br>
                        Memory: 8 GB RAM
                        <br>
                        Graphics: NVIDIA® GeForce® GTX 660 @ 2 GB / GTX 1050 or ATI® Radeon™ HD 7850 @ 2GB / AMD RX 550
                        <br>
                        DirectX: Version 11
                        <br>
                        Network: Broadband Internet connection
                        <br>
                        Storage: 90 GB available space
                        <br>
                        Sound Card: DirectX Compatible
                        <br>
                </div>
                <?php
                        require("config.php");
                        $result=mysqli_query($conn ,"select * from news where news_id=9");
                        $data=mysqli_fetch_assoc($result);
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
                ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<br>
<br>
<br>
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
