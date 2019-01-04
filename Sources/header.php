<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="ckeditor/ckeditor.js"></script>
    <title>GAMES FOR YOU</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        function detail(id, num) {
            var newNum = num+1;
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "num_click.php?id="+id+"&num_c="+newNum, true);
            xhttp.send();

        } 

    </script>
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
                                            <?php
                                                require("config.php");
                                                $result=mysqli_query($conn , "select cate_title from category");
                                                while($data=mysqli_fetch_assoc($result))
                                                     {
                                                         echo   "<a class='dropdown-item' href='gamehanhdong.php'>$data[cate_title]</a> ";
                                                     }
                                                mysqli_close($conn);
                            
                                            ?>

                                        </div>
                                    </li>
                                </ul>
                                
                                <form class="form-inline" action="search.php" method="get">
                                    <input class="form-control mr-sm-2" type="text" style="font-size :40px" value="Nhập từ khoá để search" id="txtsearch" name="keyword"/>
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
            </div>
        </div>