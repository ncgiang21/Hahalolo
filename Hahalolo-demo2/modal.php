<div class="modal js-modal">
        <div class="Create-post js-create-post">
            <div style="position:fixed;
            max-width: 500px;
            width: 100%;">
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
                                <!-- <div class="dropdown">
                                    <select style="font-family: 'Times New Roman', Times, serif;">
                                        <option selected>
                                            <i value="fas fa-globe-europe"></i>
                                            Công khai</a>
                                        </option>
                                        <option  value="1">
                                            Bạn bè
                                        </option>
                                        <option value="2">Chỉ mình tôi</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crt3" style="height: 100%">
                <textarea class="form-control" placeholder="Bạn đang nghĩ gì thế?" id="content" name="post"></textarea>
            </div>
            <!-- <div style="position: fixed;background: white;width: 500px;"> -->
            <div class="" style="padding: 57px 20px;position: absolute;bottom: 0;">
                <!-- <input type="hidden" name="size" value="1000000"> -->
                <!-- <input type="file" name="image" class="hinhanh"> -->
                
                <div style="height:0px; overflow:hidden">
                    <input type="file" id="fileInput" name="fileInput">
                  </div>
                <button type="button"  data-bs-placement="top" title="Thêm ảnh" style="border: none;font-size: 25px;border-radius: 50%;background: #00d3ff;"onclick="chooseFile();">
                    <i class="far fa-images" style="color: white;"></i>
                </button>
               </div>
            <div class="crt4">
                <button type="submit" class="btn btn-outline-info rounded">Đăng bài</button>
                
            </div>
           
            <!-- </div> -->
        </div>
    </div> 

    


    <div class="post-box">
            <?php foreach ($status as $stt) { ?>
            <div class="baiViet">
            <div class="baiViet-avt">
              <button>
                <div class="avata"></div>                 
                  <div class="ctt">
                    <p class="fw-bold bv-ct text-start" href="#"><?php echo $_SESSION['last_name'] ?></p>
                    <p class="text-muted" href="#">Hôm qua lúc 12:00<i class="fas fa-globe-americas"></i></p>
                </div>
              </button>
              <a href="php/delete-stt.php?id_status=<?=$stt['id_status']?>" class="d-flex"><i class="fas fa-times-circle text-end" ></i></a>
            </div>
            <div class="cam-nghi">
              <p><?=$stt['content']?></p>
            </div>
            <div class="anh">
              <p><img class="img-fluid" src="uploads/<?=$stt['images']?>"></p>
             
            </div>
            <div class="sl-like">
              <div class="like-count">
                <i class="fas fa-thumbs-up like-up" herf="#"></i>
                <p class="text-muted" herf="#">10</p>
                <h7 class="text-muted text-end" herf="#">1 bình luận</h7>
              </div>
            </div>
            <hr>
            <div class="like">
             
                <button>
                  <p><i class="fas fa-thumbs-up"></i></p>
                  <p class="text-muted fw-bold">Thích</p>
                  </button>
                <button>
                <p><i class="far fa-comment-alt"></i></p>
                  <p class="text-muted fw-bold">Bình luận</p>
                </button>

                <button>
                <p><i class="fas fa-share"></i></p>
                  <p class="text-muted fw-bold">Chia sẻ</p>
                </button>
              
            </div>
            <hr>
            <div class="comment-box">
              <div class="avata"></div>
              <div class="box-icon">
                    <input type="text" name="search" placeholder="Tìm kiếm trên Facebook">
              </div>
            </div>
            </div>
            <?php } ?>
            </div>