<?php
require("config.php");
echo $_REQUEST['num_c'];
mysqli_query($conn,"UPDATE indexs set num_click='$_REQUEST[num_c]' where index_id='$id'");
?>