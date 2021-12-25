<?php
    //Tạo season: mặc định mỗi phiên 24p
    session_start();
    //login.php truyền dữ liệu sang: nhận dữ liệu gửi sang
    if(isset($_POST['btnLogin'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        //Ở đây kiểm tra người dùng đã đăng nhập chưa

        //Kết nối database
        $conn = mysqli_connect('localhost','root','','hahalolo');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại thông tin máy chủ.");
        }

        //Thực hiện truy vấn
        $sql = "SELECT * FROM users WHERE email='$email' AND password= '$pass' AND status='1'";
        //Ở đây còn có các vấn đề về tính hợp lệ dữ liệu vào form
        //Nghiêm trọng: lỗi SQL injection


        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['isLoginOK'] = $email;
            header("location: index.php"); //Chuyển hướng tới trang chủ
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:login.php?error=$error"); //Chuyển hướng, hiển thị lỗi
        }
        
        //Đóng kết nối
    }else{
        header("location:login.php");
    }
?>