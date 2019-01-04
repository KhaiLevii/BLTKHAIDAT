<?php

include('config.php');
// Thông tin người dùng
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
function generate_token() {
    return md5(microtime().mt_rand());
}

// $options = [
//     'salt' => generate_token(),
//     'cost' => 12
// ];

// 
$salt = generate_token();
// $hash = password_hash($password, PASSWORD_DEFAULT, $options);

$result1=mysqli_query($conn, "SELECT * from users where username='$username'");
if (mysqli_num_rows($result1)==0)
// Chèn dữ liệu vào
    {
        $sql = "INSERT INTO users(username, password, email, salt, level, status) VALUES ('$username', '$password', '$email', '$salt', '1', '0')";
        $result = mysqli_query($conn, $sql);
    }
else
    {
      echo"<h1 style='text-align:center;'>Tên tài khoản đã tồn tai.Xin mời bạn đăng kí lại</h1>";
      echo"<a href='register.php'>Ấn vào đây để trở về trang đăng ký.Thông cảm trang web chưa được hoàn thiện</a>";
    }


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
    $message .= "http://localhost:81/dangkhai/BTLKHAIDAT/Sources/confirmation.php?user=$username&salt=$salt";

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
