<?php
    if(isset($_POST['btnRegister'])){
        require "database.php";
        $token = md5($_POST['email']) . rand(10, 9999);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "INSERT INTO users(username, email, email_verification_link ,password) VALUES('$username','$email','$token','$pass')";
        mysqli_query($conn, $sql);
        $link = "<a href='http://localhost/Hahalolo/activation.php?key=" . $email . "&token=" . $token . "'>Nhấp vào đây để kích hoạt</a>";
        include "send-mail.php";
        if (sendEmailForAccountActive($email, $link)) {
            echo "Vui lòng kiểm tra tài khoản của bạn để kích hoạt";
        }
    }
?>