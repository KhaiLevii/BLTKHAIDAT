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
                                            <a class="dropdown-item" href="category.php">HÀNH ĐỘNG</a> <a class="dropdown-item"
                                                href="# ">PHIÊU LƯU<U></U></a> <a class="dropdown-item" href="#">THỂ
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
                <h1 style="text-align:center;">Game Hành Động</h1>
                <br>
                <br>
                <br>
            </div>
            <!-- game list -->
        </div>
        <div class="row">
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="cod2.jpeg" />
                <a href="cod.php">Call of duty WW2</a>
            </div>
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="msw.jpeg" />
                <a href="">Shadow Of War</a>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img alt="" src="tomraider.jpeg" />
                <a href="">Tom Raider</a>
            </div>
            <div class="col-md-4">
                <img alt="" src="ass.jpeg" />
                <a href="">Assassin's Creed Syndicate</a>
            </div>
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