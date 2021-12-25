<?php
if(isset($_POST['btnRegister']) && $_POST['email'])
{
    //Gọi lại đoạn kết nối DB
require "database.php";

    //Thực hiện truy vấn
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
if($row= mysqli_num_rows($result) <= 0)  //Kiểm tra email chưa được dùng
{
$token = md5($_POST['email']).rand(10,9999);

//Dữ liệU lấy từ form
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "INSERT INTO users(username, email, email_verification_link ,password) VALUES('$username','$email','$token','$pass')";
mysqli_query($conn, $sql);

$link = "<a href='http://localhost/dangky/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";

include "send-mail.php";
if(sendEmailForAccountActive($email, $link)){
    echo "Vui lòng kiểm tra tài khoản của bạn để kích hoạt";
}
else{
    echo "Xin lỗi, email chưa được gửi đi. Vui lòng kiểm tra lại thông tin đăng ký tài khoản";
}
}
}else
{
echo "Bạn đã đăng ký với chúng tôi. Kiểm tra hộp email của bạn và xác minh email.";
}