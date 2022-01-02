<?php
    if(isset($_POST['btnRegister'])){
        
        require "database.php";
        $token = md5($_POST['email']) . rand(10, 9999);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO users (username, email, email_verification_link ,password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username,$email,$token,$pass);
        $stmt->execute();
        $link = "<a href='http://localhost/Hahalolo/activation.php?key=" . $email . "&token=" . $token . "'>Nhấp vào đây để kích hoạt</a>";
        include "send-mail.php";
        if (sendEmailForAccountActive($email, $link)) {
            echo "Vui lòng kiểm tra tài khoản của bạn để kích hoạt";
        }
        $stmt->close();
        $conn->close();
    }
?>