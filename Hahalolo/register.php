<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                  <a href="#" style="text-decoration: none;"><img src="img/logo_3.PNG" alt="" style="background-color: #fafafb;"><span style="font-size: 34px; color: #24a8d8;">Hahalolo</span></a>
              </div>
              <div class="row mt-4">
                <h2 style="margin-bottom: 0;">
                  <b style="font-size: 1.5rem;">Bạn thích</b>
                </h2>
                <h1 style="margin-bottom: 16px;">
                  <b style="font-size: 3rem;">đi du lịch?</b>
                </h1>
                <h2>
                  <b style="font-size: 1.5rem;">Bạn muốn tìm hiểu thông tin về những điểm đến?</b>
                </h2>
                <h2 style="margin-top: 5px ;font-size: 1.25rem; line-height: 1.6">Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi.</h2>
              </div>

              <div class="row" style="margin-top: 320px; font-size: smaller;">
                © 2017 Hahalolo. Đã đăng ký bản quyền.
              </div>

            </div>
            <div class="col-md-6 contents">
              <div class="row justify-content-center">
                <div class="col-md-8 bg-white" id="formdangky" style="box-shadow: 0px 0px 20px 0px rgb(44 101 144 / 10%); border-radius: 10px;"  >
                    <div class="mb-4" style="text-align: center;">
                        <b>
                            <span class="dangky">Đăng Ký</span>
                        </b>
                    </div>
                <form action="process-register.php" method="post">
                  <label for="username">Họ và tên</label>
                  <div class="form-group first mb-2 bg-white" style="border: 1px solid gray; border-radius: 5px;">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Họ và tên" required>
    
                  </div>
                  <label for="email">Email</label>
                  <div class="form-group second mb-2 bg-white" style="border: 0.5px solid gray; border-radius: 5px;">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>                
                  </div>
                  <label for="password">Mật khẩu</label>
                  <div class="form-group third mb-2 bg-white" style="border: 0.5px solid gray; border-radius: 5px;">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mật khẩu" required>                
                  </div>
                  <label for="password">Xác nhận mật khẩu</label>
                  <div class="form-group last mb-4 bg-white" style="border: 0.5px solid gray; border-radius: 5px;">
                    <input type="password" name="cpassword" class="form-control" id="password" placeholder="Nhập lại mật khẩu" required>                
                  </div>

                  <input type="submit" name = "btnRegister" value="Đăng Ký" class="btn btn-block btn-primary justify-content-center mt-3 mb-4">
                  <div class="mt-3" style="text-align: center;">
                    <span class="ml-auto">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="#" class="linkxanh" style="text-decoration: none; color: #24a8d8;">Điều khoản dịch vụ, Chính sách dữ liệu, Chính sách cookie </a> và <a href="#" class="linkxanh" style="text-decoration: none; color: #24a8d8;">Tiêu chuẩn cộng đồng của chúng tôi</a></span> 
                  </div>
                  <div class="mt-3 mb-4" style="text-align: center;">
                    <span class="ml-auto">Bạn đã có tài khoản? <a href="login.php" class="login" style="text-decoration: none; color: #24a8d8;">Đăng nhập</a></span> 
                  </div>

                </form>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>



    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>