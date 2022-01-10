<?php
    if(isset($_POST['btnChange'])){
        
        require "database.php";
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "UPDATE users SET password='$pass' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if ($result === TRUE) {
            echo "<h5>Đổi mật khẩu thành công, vui lòng <a href='login.php'>đăng nhập</a><h5>";
        }
        mysqli_close($conn);
}
?>