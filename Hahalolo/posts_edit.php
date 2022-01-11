<head>
<title>Sửa dữ liệu trong Database</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color: #fafafb">
<div class="posts-edit">
<?php
// Kết nối Database
require_once 'posts_connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `status` where id_status='$id'");
$row=mysqli_fetch_assoc($query);
?>
<form method="POST" class="form" style="max-width: 500px;background: white; width:100%; padding: 0 12px">
<div style="justify-content: center; display: flex;">
<h2>Sửa bài đăng</h2>

</div>

<div class="crt2" >
                    <div class="crt21" style="display: flex; padding: 16px 0">
                        <div style="padding-right: 10px;">
                            <img class="img_avt" src="./img/user (1).png" style="width: 40px " alt="">
                        </div>
                        <div>
                            <div>
                                <b>Nguyễn Đức Hiếu</b>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn " type="button" >
                                    
                                        Công khai
                                    </button>
                                                                    </div>                             
                            </div>
                        </div>
                    </div>
                </div>
<textarea value="" name="content" id="content" placeholder="Bạn đang nghĩ gì thế?" style="max-width:500px; width:100%; min-height:200px; padding: 0 16px; border:none;"rows="14"/><?php echo $row['content']; ?></textarea></label><br/>

<label>Hình ảnh: <br/>
<input type="text" value="<?php echo $row['image']; ?>" name="image"/></label><br/>
<input type="submit" value="Update" name="update_posts">
<td><input type="hidden" name="size">    
<input type="file" name="image" class="hinhanh" value="<?php echo $row['image']; ?>"><br/><br/></td>
<?php require_once 'posts_update.php';?>
</div>


</form>
</body>
</html>