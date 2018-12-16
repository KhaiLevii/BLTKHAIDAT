<?php
session_start();
if($_SESSION["level"]==2)
{
    header("location:headeradmin.php");
    exit();
    
}
else{
    header("location:index.php");
    exit();
}
?>