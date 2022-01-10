<?php
    if(isset($_POST['btnForgotpass']) && $_POST['email']){
        
        require "database.php";
        $token = md5($_POST['email']) . rand(10, 9999);
        $email = $_POST['email'];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
        if ($row = mysqli_num_rows($result) <= 0)  //Kiểm tra email chưa được dùng
        {
            $msg="Email không tồn tại";
            header("location: forgotpass.php?msg=$msg");
        }
        else{
            $link2 = "<a href='http://localhost/Hahalolo/changepass.php?key=" . $email . "&token=" . $token . "'>Nhấp vào đây để đổi lại mật khẩu</a>";
            include "send-mail-forgotpass.php";
            if (sendEmailForAccountActive($email, $link2)) {
                $msg="Vui lòng kiểm tra email của bạn để đổi lại mật khẩu";
                header("location: forgotpass.php?msg=$msg");
            }
            $conn->close();
        }
    }
?>