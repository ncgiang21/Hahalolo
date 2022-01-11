<?php
    if(isset($_POST['btnChange'])){
        
        require "database.php";
        $email = $_POST['email'];
        $pass1 = $_POST['password'];
        $pass2= $_POST['cpassword'];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
        if ($row = mysqli_num_rows($result) <= 0){ //Kiểm tra email không tồn tại
            $msg="Email không tồn tại";
            header("location: changepass.php?msg=$msg");
        }
        else{
            if ($pass1 != $pass2){
                $msg="Nhập lại mật khẩu mới không khớp, đảm bảo đã tắt caps lock.";
                header("location: changepass.php?msg=$msg");
            }else{
                $sql = "UPDATE users SET password='$pass1' WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if ($result === TRUE) {
                    $msg = "Đổi mật khẩu thành công, vui lòng đăng nhập";
                    header("location: changepass.php?msg=$msg");
                }
                mysqli_close($conn);
            }
        }
}
?>