<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php
    if ($_GET['key'] && $_GET['token']) {
        require "database.php";
        $email = $_GET['key'];
        $token = $_GET['token'];
        $sql = "SELECT * FROM `users` WHERE `email_verification_link`='" . $token . "' and `email`='" . $email . "';";
        $query = mysqli_query($conn, $sql);
        $d = date('Y-m-d H:i:s');
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_array($query);
            if ($row['email_verified_at'] == NULL) {
                $sql2 = "UPDATE users set email_verified_at ='$d', status = 1 WHERE email='$email'";
                mysqli_query($conn, $sql2);
                $msg = "Xin chúc mừng! Email của bạn đã được xác minh.";
            } else {
                $msg = "Bạn đã xác minh tài khoản của mình với chúng tôi.";
            }
        } else {
            $msg = "Email này chưa được đăng ký với chúng tôi.";
        }
    } else {
        $msg = "Sự nguy hiểm! Có điều gì đó không ổn.";
    }
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header text-center">
                User Account Activation by Email Verification using PHP
            </div>
            <div class="card-body">
                <p>
                    <?php echo $msg; ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>