<!DOCTYPE html>  
<html>
<head>
<title>Thêm bài viết</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hahalolo</title>
</head>
   
<body>
  <div class="js-modal modal">
  <div class="Create-post">
    <form action="home.php" enctype="multipart/form-data" method="post" class="form">        
        <div class="crt1">
                    <h4>Chia sẻ trải nghiệm</h4>
                    <button type="button" class="btn-close js-close" aria-label="Close"></button>
                </div>
                <hr style="margin: 0;">
                <div class="crt2">
                    <div class="crt21">
                        <div style="padding-top: 10px; padding-right: 10px;">
                            <img class="img_avt" src="./img/user (1).png" style="width: 40px " alt="">
                        </div>
                        <div>
                            <div>
                                <b>Nguyễn Đức Hiếu</b>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-light dropdown-toggle rounded " type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-globe-europe"></i>
                                        Công khai
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#">
                                                <i class="fas fa-globe-europe"></i>
                                                Công khai</a></li>
                                        <li><a class="dropdown-item" href="#">
                                                <i class="fas fa-user-friends"></i>
                                                Bạn bè</a></li>
                                        <li><a class="dropdown-item" href="#">
                                                <i class="fas fa-lock"></i>
                                                Chỉ mình tôi</a></li>
                                    </ul>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
          <tr>
          
          <td><textarea name="content" id="content" placeholder="Đây là nội dung..." class="noidung" rows="4" style="width: 100%; margin-top: 70px; height: 175px;padding-left:16px"></textarea></td>
        </tr>
          <tr>
        <td><input type="hidden" name="size" value="1000000">    
      <input type="file" name="image" class="hinhanh"><br/><br/></td>
      
         </tr>
        <div class="" style="display:flex; justify-content:center;">
            <!-- <button type="button" class="btn_submit btn-outline-info rounded">Đăng bài</button> -->
            <td colspan="2" justify="center"><input type="submit" name="btn_submit" class="btn_submit btn-outline-info rounded" style="width:80%" value="Đăng bài"/></td>
        
        </div>
       

        
      </form>
  </div>
      
  </div>


           
</body>
</html>