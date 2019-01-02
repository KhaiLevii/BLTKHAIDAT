<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAMES FOR YOU</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">

        <div class="row">

            <div class="col-md-12">
                <div class="row" style="background:black;">
                    <div class="col-md-3">
                        <a href="index.php"> <img alt="" src="logo98.png" style="width:100%;" /> </a>
                    </div>
                    <div class="col-md-6">
                        <h1 style="line-height: 250px; font-size:50px; text-shadow: 2px 2px 2px white; margin-left:30%;color:white;">
                            Sharing Games To You
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="navbar-toggler-icon"></span>
                            </button> <a class="navbar-brand" href="index.php">TRANG CHỦ</a>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown">DANH MỤC</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="gamehanhdong.php">HÀNH ĐỘNG</a> <a class="dropdown-item"
                                                href="gamethethao.php ">PHIÊU LƯU<U></U></a> <a class="dropdown-item" href="#">THỂ
                                                THAO</a>
                                            <a class="dropdown-item" href="support.php">SUPPORT</a>
                                            <a class="dropdown-item" href="upload.php">YÊU CẦU UPLOAD</a>


                                        </div>
                                    </li>
                                </ul>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="text" style="font-size :40px" />
                                    <button class="btn btn-primary my-2 my-sm-0" type="submit">
                                        Search
                                    </button>
                                </form>
                                <ul class="navbar-nav ml-md-auto">
                                    <?php
                                        if (isset($_SESSION["username"])) {
                                            echo '<li class="nav-item active">';
                                                echo "<div class='nav-link'>Xin chào ".$_SESSION['username']."</div>";
                                            echo "</li>";
                                            echo "<li class='nav-item active'>";
                                                echo '<a class="nav-link" href="logout.php">Logout</a>';
                                            echo '</li>';
                                        } else {
                                            echo '<li class="nav-item active">';
                                                echo '<a class="nav-link" href="login.php">ĐĂNG NHẬP</a>';
                                            echo '</li>';
                                            echo '<li class="nav-item active">';
                                                echo '<a class="nav-link " href="register.php" id="navbarDropdownMenuLink">ĐĂNG KÝ</a>';
                                            echo '</li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <h1 style="text-align:center;">Game Thể Thao</h1>
                <br>
                <br>
                <br>
            </div>
            <!-- game list -->
        </div>
        <div class="row">
            <?php
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
                    $result=mysqli_query($conn , "SELECT * FROM `indexs` where cate_id=18  limit $position,$display");
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
    $result=mysqli_query($conn,"SELECT * FROM `indexs` where cate_id=18");
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
                    <a class='page-link' href='gamethethao.php?id=1&begin=$prev' >Previous</a>
                     </li>";
            }
         for($page=1;$page<=$sum_page;$page++)
             {
                 $begin=($page-1)*$display;
                 if ($page==$current)
                 {
                    echo"<li class='page-item'>
                            <a class='page-link' href='gamethethao.php?id=1&begin=$begin' style='background-color:LightGray'>$page</a>
                        </li>";
                 }
                 else
                 {
                    echo"<li class='page-item'>
                    <a class='page-link' href='gamethethao.php?id=1&begin=$begin'>$page</a>
                     </li>";
                 }
            }
        if($current!=$sum_page)
            {
                $next=$position+$display;
                echo"<li class='page-item'>
                <a class='page-link' href='gamethethao.php?id=1&begin=$next'>Next</a>
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
                                <strong>Facebook, Inc. Đặng Khải Nguyễn Huy Đạt</strong><br /> Đại học Thuỷ Lợi, Tây
                                Sơn<br />
                                Quận Đống Đa, Thành phố Hà Nội<br /> <abbr title="Phone">Phone:</abbr> 0948434818
                            </address>
                        </div>
                    </div>
                </div>
                <div>