<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
    <div class="js-body">
        <!-- Header -------------------------------------------------------------------------------------->
        <div class="container-fluid position-fixed" style="z-index: 1; padding: 0;">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-white " style="padding: 0px 24px;">
                    <a class="nav-link active" aria-current="page" href=""> <img src="img/pixlr-bg-result (4).png"
                            alt="" class="rounded-circle" style="height: 70px;"></a>
                    <form class="d-flex">
                        <input class="form-control me-auto" type="search" placeholder="Tìm kiếm" aria-label="Search"
                            style="border-radius:25px;background-color: #fafafb;">


                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!--  -->
                    <div class="collapse navbar-collapse" style="padding-left:0px">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style=" text-align: center; padding: 4px 12px">
                                            <img src="img/news.png" alt="" style="width: 24px;height: 24px">
                                            <!-- <span style="background-color: bisque;" class="color"></span> -->
                                        </a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center; padding-bottom: 0px; padding-top: 0px;font-size: 12px">Bảng
                                            tin</a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-6 ;"
                                style="height: 56px;width: 78px;border-bottom: solid;border-color: #24a8d8;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/air-balloon.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center; padding-bottom: 0px; padding-top: 0px; font-size: 12px;">Trải
                                            nghiệm</a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/destination.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center; padding-bottom: 0px; padding-top: 0px;font-size: 12px">Tour</a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/hotels.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center; padding-bottom: 0px; padding-top: 0px;font-size: 12px">Khách
                                            sạn</a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/plane.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center; padding-bottom: 0px; padding-top: 0px;font-size: 12px">Vé
                                            máy bay</a>
                                    </li>
                                </div>
                            </div>

                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/car-wash.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center;padding-bottom: 0px; padding-top: 0px;font-size: 12px">Thuê
                                            xe</a>
                                    </li>
                                </div>
                            </div>
                            <div class="col-md-6 ;" style="height: 56px; width: 78px;">
                                <div class="row">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" style="text-align: center;padding: 4px 12px"><img
                                                src="img/shopping-bag.png" alt="" style="width: 24px;height: 24px;"></a>
                                        <a class="nav-link active" href="#"
                                            style="text-align: center;padding-bottom: 0px; padding-top: 0px;font-size: 12px">Mua
                                            sắm</a>
                                    </li>
                                </div>
                            </div>

                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-left: 25px;">
                            <li class="nav-item ">
                                <a class="nav-link" href="#" style="width: 48px;height: 48px;padding: 12px">
                                    <i class="far fa-bell" style="font-size: 24px; color: black;"></i>
                                </a>
                                <ul class="nav-noti">
                                    <h4 style="padding-left: 16px; padding-top: 8px;">Thông báo</h4>
                                    <div style="text-align: center;">
                                        <div>
                                            <img src="./img/busy.png" alt="">
                                        </div>
                                        <div>
                                            <p>Không có thông báo nào</p>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" style="width: 48px;height: 48px;padding: 12px;">
                                    <i class="fas fa-user-friends" style="font-size: 24px; color: black;"></i>
                                </a>
                                <ul class="nav-fr">
                                    <div style="text-align: center; ">
                                        <div style="width:100%;display: flex; padding: 8px 16px;">
                                            <div style="width:60%">
                                                <h4>Lời mời kết bạn</h4>
                                            </div>
                                            <div class="underline cursor"
                                                style="width:40%; text-align:end; padding-top: 5px; color: blue;">
                                                <a>Xem tất cả</a>
                                            </div>
                                        </div>
                                        <div style="padding-bottom: 16px;">
                                            <div style=" display: flex;">
                                                <div style="width:30%; padding-top: 10px;">
                                                    <img class="img_avt" src="./img/user (1).png" style="width:50px"
                                                        alt="">
                                                </div>
                                                <div style="width:90%; text-align: justify;">
                                                    <div class="underline cursor">
                                                        <b> Nguyễn Đức Hiếu</b>
                                                    </div>
                                                    <div style="padding-top: 5px;padding-left: 5px;">
                                                        <button class="yes-btn">Đồng ý</button>
                                                        <button class="no-btn">Từ chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style=" display: flex; padding-top: 16px;">
                                                <div style="width:30%; padding-top: 10px;">
                                                    <img class="img_avt" src="./img/user (1).png" style="width:50px"
                                                        alt="">
                                                </div>
                                                <div style="width:90%; text-align: justify;">
                                                    <div>
                                                        <b> Nguyễn Đức Hiếu</b>
                                                    </div>
                                                    <div style="padding-top: 5px;padding-left: 5px;">
                                                        <button class="yes-btn">Đồng ý</button>
                                                        <button class="no-btn">Từ chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style=" display: flex; padding-top: 16px;">
                                                <div style="width:30%; padding-top: 10px;">
                                                    <img class="img_avt" src="./img/user (1).png" style="width:50px"
                                                        alt="">
                                                </div>
                                                <div style="width:90%; text-align: justify;">
                                                    <div>
                                                        <b> Nguyễn Đức Hiếu</b>
                                                    </div>
                                                    <div style="padding-top: 5px;padding-left: 5px;">
                                                        <button class="yes-btn">Đồng ý</button>
                                                        <button class="no-btn">Từ chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style=" display: flex; padding-top: 16px;">
                                                <div style="width:30%; padding-top: 10px;">
                                                    <img class="img_avt" src="./img/user (1).png" style="width:50px"
                                                        alt="">
                                                </div>
                                                <div style="width:90%; text-align: justify;">
                                                    <div>
                                                        <b> Nguyễn Đức Hiếu</b>
                                                    </div>
                                                    <div style="padding-top: 5px;padding-left: 5px;">
                                                        <button class="yes-btn">Đồng ý</button>
                                                        <button class="no-btn">Từ chối</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" style="width: 48px;height: 48px;padding: 12px;"><img
                                        src="img/shopping-cart.png" alt="" style="width: 24px;height: 24px;"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="width: 48px;height: 48px;padding: 12px;"><img
                                        src="img/wallet.png" alt="" style="width: 24px;height: 24px;"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="width: 48px;height: 48px; padding: 12px;"><img
                                        src="img/pixlr-bg-result (1).png" alt="" style="height: 24px;"
                                        class="rounded-circle"></a>
                            </li>
                            <li class="nav-item js-user">
                                <a class="nav-link" href="#" style="width: 56px;height: 56px; "><img
                                        src="img/user (1).png" alt="" style="width: 40px;height: 40px;"></a>
                                <ul class="nav-user js-more-user">
                                    <div class="info1-left">
                                        <div class="avt" style="padding-top: 3px; padding-right: 10px;">
                                            <img src="./img/user (1).png" alt="" class="img_avt cursor"
                                                style="width:40px">
                                        </div>
                                        <ul class="name" style="width: 100%; padding-left: 0px;">
                                            <b class="font-16px cursor" href="#" style="height: 20px;"> Nguyễn Đức
                                                Hiếu</b>
                                            <div class="time" style="height: 24px;display: flex;">
                                                <p class="cursor color"
                                                    style="font-size: 14px; margin-bottom: 0; text-align: center;">
                                                    Xem hồ sơ của bạn</p>
                                            </div>
                                        </ul>
                                    </div>
                                    <div>
                                        <div style="display: block;">
                                            <div class="jj9">
                                                <i class="fas fa-book-open"></i>
                                                <div class="tab-h9">
                                                    <h9>Sổ tay</h9>
                                                </div>
                                            </div>
                                            <div class="jj9">
                                                <i class="fas fa-cog"></i>
                                                <div class="tab-h9">
                                                    <h9>Thiết lập riêng tư và bảo mật</h9>
                                                </div>
                                            </div>
                                            <div class="jj9">
                                                <div>
                                                    <i class="fas fa-sun"></i>
                                                </div>
                                                <div class="tab-h9">
                                                    <h9>Chế độ tối (Tắt)</h9>
                                                    <br>
                                                    <h9 style="color: rgba(0, 0, 0, 0.54);">Điều chỉnh giao diện để giảm
                                                        độ
                                                        chói và cho đôi mắt được nghỉ ngơi.
                                                    </h9>
                                                </div>
                                            </div>
                                            <div class="jj9" href="logout.php" onclick="window.location.href='login.php'">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <div class="tab-h9" >
                                                <a style="text-decoration: none; color: black">Đăng xuất</a>
                                                </div>
                                                </div>
                                        </div>
                                    </div>

                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nội dung chính -->
        <div id="main">
            <!-- ND trái --------------------------------------------------------------------------------->
            <div class="left-main">
                <div class="info-left">
                    <div class="bgr-info-left shadow">
                        <div class="info1-left">
                            <div class="avt" style="padding-top: 3px; padding-right: 10px;">
                                <img src="./img/user (1).png" alt="" class="img_avt cursor" style="width:40px">
                            </div>
                            <ul class="name" style="width: 440px; padding-left: 0px;">
                                <b class="font-16px cursor" href="#" style="height: 20px;"> Nguyễn Đức Hiếu</b>
                                <div class="time" style="height: 24px;display: flex;">
                                    <p class="cursor color"
                                        style="font-size: 14px; margin-bottom: 0; text-align: center;">
                                        Xem hồ sơ của bạn</p>
                                </div>
                            </ul>
                        </div>
                        <div class="info2-left cursor">
                            <a style="padding: 8px 16px; height: 48px; display: flex;">
                                <div>
                                    <i class="fas fa-dollar-sign" style="font-size: 24px;"></i>

                                </div>
                                <span class="color" style="padding-left: 22px;">38xu</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-book" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Sổ tay</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fab fa-bitcoin" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Tài khoản kinh doanh</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-wallet" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Tài khoản thanh toán</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-comment-dots" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Tài khoản bán hàng</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-user-friends" style="font-size: 24px;"></i>

                                </div>
                                <span class="color" style="padding-left: 15px;">Bạn bè</span>
                            </a>
                            <a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-images" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Hình ảnh</span>
                            </a><a style="padding: 8px 16px; height: 48px;display: flex;">
                                <div>
                                    <i class="fas fa-star" style="font-size: 24px;"></i>
                                </div>
                                <span class="color" style="padding-left: 15px;">Bookmarks</span>
                            </a>
                        </div>

                    </div>

                </div>
                <div class="weather ">
                    <img class="img-left1 cursor shadow"
                        src="https://media.hahalolo.com/2021/12/03/10/09/2ef3b5e68ea8c3730f070a118344e22d-1638526164.jpg"
                        alt="">
                </div>
            </div>
            <!-- ND giữa --------------------------------------------------------------------------------->
            <div class="center-main">
                <div class="up-status shadow">
                    <div class="up1 jj1">
                        <button class="jj1 js-newpost">
                            <span>Chia sẻ trải nghiệm</span>
                        </button>
                    </div>
                    <div class="up2 js-newpost cursor" style="padding: 16px; padding-bottom: 24px;max-height: 80px;">
                        <div style="display: flex">
                            <div class="avt" style="padding: 8px; display: contents;">
                                <img src="./img/user (1).png" class="img_avt cursor" style="width: 40px; " alt="">
                            </div>
                            <div class="tx color cursor js-newpost" style="padding: 8px;">
                                <i class="cursor"> Chia sẻ trải nghiệm của bản thân!</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content shadow">
                    <div class="img cursor">
                        <img src="./img/center1.webp" class="img-center1" alt="">
                    </div>
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
                            <p>
                                <i class="bi bi-three-dots"></i>
                            </p>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="text">
                            Lake Kelimutu in Indonesia, also known as the tricolored lake with the ability to change
                            color
                            magically, is a beautiful destination on the island of Flores.
                            Where is Lake Kelimutu?
                            Lake Kelimutu in Indonesia is one of the attractive destinations in Southeast Asia with its
                            mysterious and magical beauty, attracting a large number of international tourists to visit.
                            This lake is located on the Kelim...
                            <strong class="seemore">Xem thêm</strong>
                        </div>
                    </div>
                    <div class="jj5"
                        style="padding: 8px 16px 8px 35px; display: flex; font-size: 0.875rem; height: 40px;">
                        <div class="reaction_1">
                            <a>
                                <i style="padding-right: 10px;" href="#" class="fas fa-globe-europe cursor"></i>
                            </a>
                            <p class="cursor underline ">100</p>
                        </div>
                        <div class="reaction_2">
                            <div class=" cursor underline text-center " style="width: 50%;">
                                3 Bình luận
                            </div>
                            <div class=" text-center" style=" width: 5%;">
                                <b>·</b>
                            </div>
                            <div class=" cursor underline text-center " style=" width: 45%;">
                                5 Chia sẻ
                            </div>
                        </div>
                    </div>
                    <hr class="hr" style="margin: 0px 16px">

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
                    <hr class="hr" style="margin: 0px 16px">
                    <div>
                        <div class="comment">
                            <div class="avt_cmt">
                                <img src="./img/avt.webp" alt="" class="img_avt-cmt cursor">
                            </div>
                            <div class="div" style="width: 75%">
                                <div style="padding: 8px; display: inline-block;">
                                    <div class="cmt">
                                        <b class="font-14px cursor underline" href="#" style="height: 14px;"> Nguyễn
                                            Công
                                            Giang</b>
                                        <div class="time" style="height: 24px;display: inline-block;">
                                            <p style="font-size: 14px; margin-bottom: 0; ;">giải trí cuối
                                                tuần
                                                như này nhẹ nhàng bổ ích nè</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="timee"
                                    style="color:  rgba(0, 0, 0, 0.54);display: flex; width: 100%; height: 24px; padding-left: 16px;">
                                    <b class="font-14px cursor">Haha</b>
                                    <c class="dot"> · </c>
                                    <b class="font-14px cursor">Trả lời</b>
                                    <c class="dot"> · </c>
                                    <p class="font-14px cursor">5 giờ trước</p>
                                </div>
                            </div>

                        </div>
                        <div class="comment">
                            <div class="avt_cmt">
                                <img src="./img/avt.webp" alt="" class="img_avt-cmt cursor">
                            </div>
                            <div class="div" style="width: 75%">
                                <div style="padding: 8px; display: inline-block;">
                                    <div class="cmt">
                                        <b class="font-14px cursor underline" href="#" style="height: 14px;"> Nguyễn
                                            Công
                                            Giang</b>
                                        <div class="time" style="height: 24px;display: inline-block;">
                                            <p style="font-size: 14px; margin-bottom: 0; ;">giải trí cuối
                                                tuần
                                                như này nhẹ nhàng bổ ích nè</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="time"
                                    style="color:  rgba(0, 0, 0, 0.54);display: flex; width: 100%; height: 24px; padding-left: 16px;">
                                    <b class="font-14px cursor">Haha</b>
                                    <c class="dot"> · </c>
                                    <b class="font-14px cursor">Trả lời</b>
                                    <c class="dot"> · </c>
                                    <p class="font-14px cursor">5 giờ trước</p>
                                </div>
                            </div>
                        </div>
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
                </div>
                <div class="content2">
                    <?php require 'posts_xuly.php';?> 

                </div>
                <!-- <div class="content content2 shadow">
                    <div class="img cursor">
                        <img src="./img/center1.webp" class="img-center1" alt="">
                    </div>
                    <div class="main-info">
                        <div class="avt" style="padding-top: 3px; padding-right: 10px;">
                            <img src="./img/avt.webp" alt="" class="img_avt cursor">
                        </div>
                        <div class="name" style="width: 440px">
                            <b class="font-16px cursor underline" href="#" style="height: 20px;">hbmkamye</b>
                            <div class="time" style="height: 24px;display: flex;">
                                <p class="cursor color underline" style="font-size: 14px; margin-bottom: 0; ;">5
                                    giờ
                                    trước</p>
                                <c class="dot" style="width: 13px;height: 24px; "> · </c>
                                <a class="">
                                    <i href="#" class="fas fa-globe-europe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="button cursor text-end" style="text-align: end; padding-left: 20px; width: 100%;">
                            <p>
                                <i class="bi bi-three-dots"></i>
                            </p>
                        </div>
                    </div>
                    <div class="main-content">
                        <div class="text">
                            Lake Kelimutu in Indonesia, also known as the tricolored lake with the ability to
                            change
                            color
                            magically, is a beautiful destination on the island of Flores.
                            Where is Lake Kelimutu?
                            Lake Kelimutu in Indonesia is one of the attractive destinations in Southeast Asia
                            with its
                            mysterious and magical beauty, attracting a large number of international tourists
                            to visit.
                            This lake is located on the Kelim...
                            <strong class="seemore">Xem thêm</strong>
                        </div>
                    </div>
                    <div class="jj5"
                        style="padding: 8px 16px 8px 35px; display: flex; font-size: 0.875rem; height: 40px;">
                        <div class="reaction_1">
                            <a>
                                <i style="padding-right: 10px;" href="#" class="fas fa-globe-europe cursor"></i>
                            </a>
                            <p class="cursor underline ">100</p>
                        </div>
                        <div class="reaction_2 ">
                            <div class=" cursor underline text-center " style="width: 50%;">
                                3 Bình luận
                            </div>
                            <div class=" text-center" style=" width: 5%;">
                                <b>·</b>
                            </div>
                            <div class=" cursor underline text-center " style=" width: 45%;">
                                5 Chia sẻ
                            </div>
                        </div>

                    </div>
                    <hr class="hr" style="margin: 0px 16px">

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
                    <hr class="hr" style="margin: 0px 16px">
                    <div>
                        <div class="comment">
                            <div class="avt_cmt">
                                <img src="./img/avt.webp" alt="" class="img_avt-cmt cursor">
                            </div>
                            <div class="div" style="width: 75%">
                                <div style="padding: 8px; display: inline-block;">
                                    <div class="cmt">
                                        <b class="font-14px cursor underline" href="#" style="height: 14px;">
                                            Nguyễn
                                            Công
                                            Giang</b>
                                        <div class="time" style="height: 24px;display: inline-block;">
                                            <p style="font-size: 14px; margin-bottom: 0; ;">giải trí cuối
                                                tuần
                                                như này nhẹ nhàng bổ ích nè</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="time"
                                    style="color:  rgba(0, 0, 0, 0.54);display: flex; width: 100%; height: 24px; padding-left: 16px;">
                                    <b class="font-14px cursor">Haha</b>
                                    <c class="dot"> · </c>
                                    <b class="font-14px cursor">Trả lời</b>
                                    <c class="dot"> · </c>
                                    <p class="font-14px cursor">5 giờ trước</p>
                                </div>
                            </div>

                        </div>

                        <div class="comment">
                            <div class="avt_cmt">
                                <img src="./img/avt.webp" alt="" class="img_avt-cmt cursor">
                            </div>
                            <div class="div" style="width: 75%">
                                <div style="padding: 8px; display: inline-block;">
                                    <div class="cmt">
                                        <b class="font-14px cursor underline" href="#" style="height: 14px;">
                                            Nguyễn
                                            Công
                                            Giang</b>
                                        <div class="time" style="height: 24px;display: inline-block;">
                                            <p style="font-size: 14px; margin-bottom: 0; ;">giải trí cuối
                                                tuần
                                                như này nhẹ nhàng bổ ích nè</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="time"
                                    style="color:  rgba(0, 0, 0, 0.54);display: flex; width: 100%; height: 24px; padding-left: 16px;">
                                    <b class="font-14px cursor">Haha</b>
                                    <c class="dot"> · </c>
                                    <b class="font-14px cursor">Trả lời</b>
                                    <c class="dot"> · </c>
                                    <p class="font-14px cursor">5 giờ trước</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- ND phải --------------------------------------------------------------------------------->
            <div class="right-main">
                <div class="more cursor">
                    <div class="shadow" style="width: 100%;height: auto;border-radius: 3px;">
                        <img src="./img/right1.jpg" class="img-right1" alt="">
                    </div>
                </div>

                <div class="christmas">
                    <div class="shadow" style="width: 100%;height: auto;border-radius: 3px;">
                        <img class="img-left1 cursor shadow"
                            src="https://media.hahalolo.com/2021/12/16/04/37/3eb3751da306d09749107c733e28cf51-1639629441.jpg"
                            alt="">
                    </div>
                </div>

                <div class="christmas">
                    <div class="shadow" style="width: 100%;height: auto;border-radius: 3px;">
                        <img class="img-left1 cursor shadow"
                            src="https://media.hahalolo.com/2021/12/16/04/37/3eb3751da306d09749107c733e28cf51-1639629441.jpg"
                            alt="">
                    </div>
                </div>

                <div class="christmas">
                    <div class="shadow" style="width: 100%;height: auto;border-radius: 3px;">
                        <img class="img-left1 cursor shadow"
                            src="https://media.hahalolo.com/2021/12/16/04/37/3eb3751da306d09749107c733e28cf51-1639629441.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ----------------------------------------------------------------------------------------------->
    <?php require './posts_add.php';?> 

    <script>


        function chooseFile() {
            document.getElementById("fileInput").click();
        }

        const postBtns = document.querySelectorAll('.js-newpost')
        const modal = document.querySelector('.js-modal')
        const close = document.querySelector('.js-close')
        const user = document.querySelector('.js-user')
        const moreuser = document.querySelector('.js-more-user')
        const Createpost = document.querySelector('.js-create-post')
        const closeALL = document.querySelector('#main')
        // const signout = document.querySelector('home.html')
        // mở modal
        function showAddNewPost() {
            modal.classList.add('open')
        }
        function showAddNewPost() {
            modal.classList.add('open')
        }

        function hideAddNewPost() {
            modal.classList.remove('open')
        }

        for (const postBtn of postBtns) {
            postBtn.addEventListener('click', showAddNewPost)
        }

        close.addEventListener('click', hideAddNewPost)

        // modal.addEventListener('click', hideAddNewPost)

        // Createpost.addEventListener('click' function (event) {
        //    event.stopPropagation()
        // })

        // mở user
        function showMoreUser() {
            moreuser.classList.add('openn')
        }
        function hideMoreUser() {
            moreuser.classList.remove('openn')
        }
        user.addEventListener('click', showMoreUser)
        closeALL.addEventListener('click', hideMoreUser)

    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="js/main.js"></script>
</body>

</html>