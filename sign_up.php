<?php

include('config.php');

// Thông tin người dùng
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

function generate_token() {
    return md5(microtime().mt_rand());
}

$options = [
    'salt' => generate_token(), //write your own code to generate a suitable salt
    'cost' => 12 // the default cost is 10
];

// 
$salt = $options["salt"];
$hash = password_hash($password, PASSWORD_DEFAULT, $options);


// Chèn dữ liệu vào
$sql = "INSERT INTO tmp_users(username, password, email, salt) VALUES ('$username', '$hash', '$email', '$salt')";
$result = mysqli_query($conn, $sql);


// Nếu thành công, gửi mail xác nhận
if ($result) {
    // ---------------- SEND MAIL FORM ----------------
    // send e-mail to ...
    $to= $email;
    // Chủ Đề
    $subject = "Mail Activate Account ";
    // From
    $header = "From: Admin <dangkhai.info@gmail.com>";
    $message = "Click on the link to activate your account: ";
    $message .= "http://localhost:81/dangkhai/btl2-master/confirmation.php?user=$username&salt=$salt";

    // Gủi mail
    $sentmail = mail($to,$subject,$message,$header);
}

// Mail bạ gửi thành công
if($sentmail){
    echo "<h1>Link kích hoạt đã được gửi vào email của bạn!</h1>";
    echo"<a href='login.php'> (-Đăng nhập-)</a>";
}
else {
    echo "Không thể gửi mail";
}
mysqli_close($conn);
?>
