<?php
$pattern= "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)(?=.*\S)(?=.*\D).{8,15})/";
$str = "adasreADF546#$";
if (preg_match($pattern,$str)){
    echo "mail hop le";
}
else{
    echo "mail khong hop le";
}

?>
<form action="">
</form>