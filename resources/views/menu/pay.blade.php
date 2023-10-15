<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/pay.css">
    <link rel="stylesheet" href="./assets/css/main-menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Dream Team</title>
</head>
<body>

           <div class="header">
            <div class="topbar">
                <div class="topbar_place">
                    <i class="fas fa-map-marker"></i> 34 Dương Thưởng, Hòa Cường Bắc, Hải Châu, Đà Nẵng
                </div>

                <div class="topbar_media">
                    <div class="media_phone">
                        <i class="fas fa-phone"></i>
                        <span>0123456789</span>
                    </div>
                    <div class="media_fb">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_insta">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_twitter">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_ytb">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="header_main">
                <div class="header_inner">
                    <div class="header_logo">
                        <img class="header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
                    </div>

                    <div class="header_center">
                        <div class="header_search">
                            <input type="search" class="search_web" placeholder="Tìm kiếm">
                        </div>

                        <div class="header_search_logo">
                            <button class="search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="header_right">
                        <div class="cart">
                            <a href="facebook.com" class="cart_text">Giỏ Hàng</a>

                            <div class="cart_box">
                                <div class="logo_cart">0</div>
                            </div>
                        </div>

                        <div class="header_signin">
                            <button class="btn_login">Đăng Ký</button>
                        </div>

                        <div class="header_login">
                            <button class="btn_login">Đăng Nhập</button>
                        </div>
                    </div>

                </div>


            </div>

            <div class="menu">
                <a id="home" class="header_home_text">
                    <a class="chumenu" href="./index.php">TRANG CHỦ </a>
                </a>
                <a id="phone" class="header_home_text">
                    <a class="chumenu" href="./dienthoai.php">ĐIỆN THOẠI</a>
                </a>
                <a id="laptop" class="header_home_text">
                    <a class="chumenu" href="./laptop.php">LAPTOP</a>
                </a>
                <a id="tablet" class="header_home_text">
                    <a class="chumenu" href="./tablet.php">MÁY TÍNH BẢNG</a>
                </a>
                <a id="phukien" class="header_home_text">
                    <a class="chumenu" href="./phukien.php">PHỤ KIỆN</a>
                </a>
                <a id="contact" class="header_home_text">
                    <a class="chumenu" href="#">LIÊN HỆ</a>
                </a>
            </div>
        </div>
    <div class="all-pay">
        <div class="pay-left">
            <h1>THÔNG TIN TÀI KHOẢN</h1>

            <div  class="body-pay-left">
                <div class="nguoinhan">
                    <span class="font-weight">Tên người nhận:</span>
                    <span class="tennguoinhan"><?php echo $username ?></span>
                </div>
                <div class="SDT-ND">
                    <span class="headsdt font-weight">Số điện thoại:</span>
                    <p class="SDT-kh" name="SDT-kh" id="SDT-kh"> </p> <?php   echo $email?>
                </div>

                <div class="diachikh">
                    <form action="./hoadon.php" name = "diachi" method = "post">
                        <span class="diachi font-weight">Địa Chỉ Khách Hàng: </span>
                        <p class="bodykhachhang">
                            <label for="province " class="font-weight">Tỉnh/TP</label><br>

                            <select name="tinh" id="province">
                                <option value="" disabled selected>-- Chọn Tỉnh --</option>
                            </select><br><br>

                            <label for="district"class="font-weight" >Quận/Huyện</label><br>

                            <select name = "huyen" id="district">
                                <option value="" disabled selected>-- Chọn huyện--</option>
                            </select><br><br>

                            <label for="province" class="font-weight">Xã/Phường</label><br>

                            <input type="text" name = "xa" class="xaphuong" placeholder="Chọn Xã phường" style="font-size: 15px;"><br><br>

                        </p>
                        <div class="ghichu">
                            <label for="province" class="font-weight">Ghi chú: </label><br>
                            <input type="text" class="ghichund">
                        </div>
                        <input type="submit" value="Thanh Toan" name= "submitdiachi">
                    </form>


                </div>

            </div>

        </div>
        <div class="pay-right">
            <div>
                <h1>ĐƠN HÀNG CỦA BẠN</h1>
                <div class="head-right">
                    <div class="pay-headsp">
                        <p class="head-sp">SẢN PHẨM</p>
                        <p class="head-tamtinh">TẠM TÍNH</p>
                    </div>
                </div>
            </div>


            <div class="head-right">

                <div class="pay-ttsp">
                    <p class="pay-tensp"><?php echo $row["tenSp"]?></p>
                    <p class="pay-slsp"><?php echo $rowww["soluong"]?></p>
                    <p class="tien"><?php echo $tamtinh?></p><sup>đ</sup>
                </div>
            </div>

            <div class="giao-hang-main pay_giao_hang">
                <label>Giao hàng</label>
                <div class="phi-giao-hang">
                    <span >Đồng giá:</span><span><?php echo $phigiaohang?><sup>đ</sup></span>
                </div>

            </div>
            <div class="total_money pay_total_money">
                <div class="total_money-title">
                    <span>Tổng tiền:</span>
                </div>
                <div class="total-main" name="total-main"><?php echo $tong?><sup>đ</sup></div>
            </div>
            <div class="phuong-thuc-pay">
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a1">
                        <span>Thanh toán khi nhận hàng</span>
                    </div>
                    <div class="pay-box  abcd block" id="a1">
                    Trả tiền mặt khi giao hàng
                    </div>
                </div>
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a2">
                        <span>Chuyển khoản ngân hàng</span>
                    </div>
                </div>
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a3">
                        <span>Thanh toán với PayPal</span>
                    </div>
                </div>
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a4">
                        <span>Quét mã MoMo</span>
                    </div>
                </div>
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a5">
                        <span>Cổng thanh toán nội địa OnePay</span>
                    </div>
                </div>
                <div class="phuong-thuc-pay-items-box">
                    <div class="phuong-thuc-pay-items">
                        <input type="radio" name="radio" class="a" data-title="#a6">
                        <span>Cổng thanh toán Quốc tế OnePay</span>
                    </div>
                </div>
            </div>
            <!-- <button type="submit" class="dat_hang">ĐẶT HÀNG</button> -->
            <button onclick="window.location.href='./hoadon.php'">ĐẶT HÀNG</button>
        </div>
        </div>

    </div>

    <!-- <script src="./ajax.js"></script> -->
    <script src="./ajax.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
