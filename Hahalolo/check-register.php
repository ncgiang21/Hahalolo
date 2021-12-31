<?php
if($_POST['email']) {
    //Gọi lại đoạn kết nối DB
    require "database.php";

    //Thực hiện truy vấn
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
    if ($row = mysqli_num_rows($result) <= 0)  //Kiểm tra email chưa được dùng
    {   
        echo "Email hợp lệ, có thể đăng kí";
    }else{
        $row = mysqli_fetch_array($result);
        if ($row['status'] == 1){
            echo "Email đã được đăng kí, vui lòng đăng nhập";
        }else{
            echo "Bạn đã đăng ký với chúng tôi. Kiểm tra hộp email của bạn và xác minh email.";
        }
    }
}
?>