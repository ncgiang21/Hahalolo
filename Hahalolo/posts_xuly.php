<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="noidung">
<table>
<tr>
</tr>
<?php


require 'posts_connect.php';

// Up bài viết
if (isset($_POST['btn_submit'])) {
    $content = $_POST['content'];
// Upload ảnh 
    $image = $_FILES['image']['name'];
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    $exploded = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($exploded));
    $expensions= array("jpeg","jpg","png");
           
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
           
    if($file_size > 2097152) {
        $errors[]='Kích thước file không được lớn hơn 2MB';
    }
    $target = "photo/".basename($image);
    $sql = "INSERT INTO status(content,image ) VALUES ('$content', '$image' )";
    if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target) && empty($errors)==true) {
            echo '<script language="javascript">alert("Đăng bài viết thành công!");</script>';
            } else{
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
    }
}
    $sql = "SELECT * FROM status WHERE id_status";
    $result = mysqli_query($conn, $sql);
    // $status = get_all_status($conn);
    while ($row = mysqli_fetch_array($result)) {     
        echo "<tr><img src='photo/".$row['image']."' class='img_post'></tr>";     
        echo "<tr><p>".$row['content']."</p></tr>";     
        // echo"<td><img class='avtt' src='./img/avt.webp'></td>";
        // echo"<td>hbmkamye</td>";     
        echo '<td><a href="posts_edit.php?id='.$row['id_status'].'">Sửa</a></td>
         <td><a href="posts_delete.php?id='.$row['id_status'].'">Xóa</a></td>';    
        // <td><a href="posts_edit.php?id='.$row['id'].'">edit</a></td> |   
    }
    while ($row = mysqli_fetch_array($result)) {     
        echo "<tr><img src='photo/".$row['image']."'></tr>";     
        // echo"<td><img class='avtt' src='./img/avt.webp'></td>";
        // echo"<td>
        // hbmkamye
        // <a>5 giờ trước</a>
        // </td>";     
        // echo ' <td><a href="posts_delete.php?id='.$row['id'].'">Delete</a></td>';    
        // <td><a href="posts_edit.php?id='.$row['id'].'">edit</a></td> |   
        echo "<tr><p>".$row['content']."</p></tr>";     
    }
    

    
?>

</table>
<hr style=" width: 552px; margin: 3px 16px ">
<div class="main-info">
                        <div class="avt" style="padding-top: 3px; padding-right: 10px;width: 65px;">
                            <img src="./img/avt.webp" alt="" class="img_avt cursor">
                        </div>
                        <div class="name" style="width: 440px">
                            <b class="font-16px cursor underline" href="#" style="height: 20px;">hbmkamye</b>
                            <div class="time" style="height: 24px;display: flex;">
                                <p class="cursor color underline"
                                    style="font-size: 14px; margin-bottom: 0; text-align: center;">5 giờ
                                    trước</p>
                                <c class="dot" style="width: 13px;height: 24px; "> · </c>
                                <a class="">
                                    <i href="#" class="fas fa-globe-europe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="button cursor text-end" style="text-align: end; padding-left: 20px; width: 100%;">
                        <li class="nav-item" style="  list-style-type: none ;">
                                <i class="bi bi-three-dots"></i>
                                <ul class="nav-edit">
                                    <a href="./posts_edit.php">Sửa</a>                                   
                                    <a href="./posts_delete.php">Xóa</a>
                                </ul>
                            </li>
                        </div>
                    </div>
<div class="jj5"
                        style="padding: 8px 16px 8px 35px; display: flex; font-size: 0.875rem; height: 40px;">
                        <div class="reaction_1">
                            <a>
                                <i style="padding-right: 10px;" href="#" class="fas fa-globe-europe cursor"></i>
                            </a>
                            <p class="cursor underline "></p>
                        </div>
                        <div class="reaction_2">
                            <div class=" cursor underline text-center " style="width: 50%;">
                                Bình luận
                            </div>
                            <div class=" text-center" style=" width: 5%;">
                                <b>·</b>
                            </div>
                            <div class=" cursor underline text-center " style=" width: 45%;">
                                Chia sẻ
                            </div>
                        </div>
                    </div>
<hr style="margin: 0px 16px">
                    <div class="button" style="padding: 4px 16px; display: flex;">
                        <div class="button-btn" style="padding: 0 6px;width: 25%; ;">
                            <button style="padding: 6px 8px; width: 100%; border: none; background: none;">
                                Haha
                            </button>
                        </div>
                        <div class="button-btn" style="padding: 0 6px;width: 25%; ;">
                            <button style="padding: 6px 8px; width: 100%; border: none; background: none;">
                                Bình luận
                            </button>
                        </div>
                        <div class="button-btn" style="padding: 0 6px;width: 25%; ;">
                            <button style="padding: 6px 8px; width: 100%; border: none; background: none;">
                                Chia sẻ
                            </button>
                        </div>
                        <div class="button-btn" style="padding: 0 6px;width: 25%; ;">
                            <button style="padding: 6px 8px; width: 100%; border: none; background: none;">
                                <i class="fas fa-radiation" style="color: rgba(7, 7, 255, 0.322);"></i>
                            </button>
                        </div>
                    </div>
             <hr style="margin: 0px 16px">                 
                        <div class="new-cmt">
                            <div class="avt_cmt" style="margin: 0%;">
                                <img src="./img/avt.webp" alt="" class="img_avt-cmt cursor">
                            </div>
                            <div class="ncm cmt">
                                <input type="text" class="form-control add-cmt" placeholder="Viết bình luận"
                                    aria-label="Username" aria-describedby="addon-wrapping">
                                <i class="far fa-smile cursor"></i>
                            </div>
                        </div>
</div>
</body>
</html>