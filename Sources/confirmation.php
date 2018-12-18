<?php
    include('config.php');
    // Passkey được lấy từ link
    $salt=$_GET["salt"];
    $user = $_GET["user"];

    $options = [
        'salt' => $salt, //write your own code to generate a suitable salt
        'cost' => 12 // the default cost is 10
    ];

    $sql = "SELECT * FROM users WHERE username = '$user' and salt ='$salt'";
    $result = mysqli_query($conn,$sql);

    // Return the number of rows in result set
    if ($result) {
        if ($rowcount=mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

                $password = $row["password"];
                $hash = password_hash($password, PASSWORD_DEFAULT, $options);

                $sql = "UPDATE users set password= '$hash', status='1' where username = '$user' and salt ='$salt'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    mysqli_close($conn);
                    echo "<h1>Thành công</h1>";
                    header("location:login.php");
                    exit();
                }
            
        }
    }

    mysqli_close($conn);
?>