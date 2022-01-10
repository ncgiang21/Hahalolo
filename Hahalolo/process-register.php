<?php
    if(isset($_POST['btnRegister'])){
        
        require "database.php";
        $token = md5($_POST['email']) . rand(10, 9999);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass1 = $_POST['password'];
        $pass2 = $_POST['cpassword'];
        if ($pass1 != $pass2){
            $msg="Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock.";
            header("location: register.php?msg=$msg");
        }else{
            $stmt = $conn->prepare("INSERT INTO users (username, email, email_verification_link ,password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $username,$email,$token,$pass1);
            $stmt->execute();
            $link1 = "<a href='http://localhost/Hahalolo/activation.php?key=" . $email . "&token=" . $token . "'>Nhấp vào đây để kích hoạt</a>";
            include "send-mail-register.php";
            if (sendEmailForAccountActive($email, $link1)) {
                $msg="Vui lòng kiểm tra tài khoản của bạn để kích hoạt tài khoản";
                header("location: register.php?msg=$msg");
            }
            $stmt->close();
            $conn->close();
        }
    }
?>