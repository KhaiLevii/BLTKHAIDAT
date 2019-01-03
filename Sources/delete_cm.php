<?php
$id = $_GET['id'];
require("config.php");

mysqli_query($conn,"delete from comment where cm_id = $id");

mysqli_close($conn);
header("location:list_comment.php");
exit();

?>