<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>postsxuly</title>
</head>

<body>
    <div class="center-main">
            <?php
            require 'database.php';
            // Up bài viết
            if (isset($_POST['btn_submit'])) {
                $content = $_POST['content'];
                // Upload ảnh 
                $image = $_FILES['image']['name'];
                $errors = array();
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_type = $_FILES['image']['type'];
                $exploded = explode('.', $_FILES['image']['name']);
                $file_ext = strtolower(end($exploded));

                $expensions = array("jpeg", "jpg", "png");

                if (in_array($file_ext, $expensions) === false) {
                    $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                }

                if ($file_size > 2097152) {
                    $errors[] = 'Kích thước file không được lớn hơn 2MB';
                }
                $target = "hinhanh/" . basename($image);
                $sql = "INSERT INTO status(content,image ) VALUES ('$content', '$image' )";
                if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target) && empty($errors) == true) {
                    echo '<script language="javascript">alert("Đăng bài viết thành công!");</script>';
                } else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
                }
            }
            $sql = "SELECT * FROM status WHERE id_status";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<img src='hinhanh/" . $row['image'] . "'>";
                echo "<p>" . $row['content'] . "</p>";
                echo "<a href='posts_edit.php?id_status=" . $row['id_status'] . "'>Edit</a><br>";
                echo "<a href='posts_delete.php?id_status=" . $row['id_status'] . "'>Delete</a>";
            }
            ?>
    </div>
</body>

</html>