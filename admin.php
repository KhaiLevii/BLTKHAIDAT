<?php
session_start();
if($_SESSION["level"]==2)
{
    require("headeradmin.php");
}
else{
    header("location:index.php");
    exit();
}
?>