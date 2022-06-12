<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('allcode.headcustommer')
</head>

<body>
    <div class="all">
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
                            <span class="cart_text">Giỏ Hàng</span>

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
                <a href="../index.php" id="home" class="header_home_text">
                    <span>TRANG CHỦ</span>
                </a>
                <a href="../dienthoai.php" id="phone" class="header_home_text">
                    <span>ĐIỆN THOẠI</span>
                </a>
                <a href="../laptop.php" id="laptop" class="header_home_text">
                    <span>LAPTOP</span>
                </a>
                <a href="../tablet.php" id="tablet" class="header_home_text">
                    <span>MÁY TÍNH BẢNG</span>
                </a>
                <a href="../phukien.php" id="phukien" class="header_home_text">
                    <span>PHỤ KIỆN</span>
                </a>
                <a href="../contact.php" id="contact" class="header_home_text">
                    <span>LIÊN HỆ</span>
                </a>
            </div>
        </div>

        <div class="main">
            <h1 class="heading_main">Giao hàng và thanh toán</h1>
            <div class="content_main">
                <h2 class="content_heading">1. Thanh toán khi nhận hàng:</h2>
                <div class="content_text">
                    <div>Khách hàng sẽ thanh toán khi nhận được hàng.</div>
                </div>

                <h2 class="content_heading">2. Trả góp:</h2>
                <div class="content_text">
                    <div>Tham gia chương trình trả góp 0%.</div>
                    <div>Có thể trả góp 0% lãi suất bằng thẻ tín dụng.</div>
                    <div>Áp dụng trả góp lãi suất 0% cho mọi sản phẩm.</div>
                    <div>Không áp dụng hủy đơn hàng khi đã thanh toán thành công khi tham gia Chương trình trả góp 0%.</div>
                </div>

                <h2 class="content_heading">3. Chuyển khoản:</h2>
                <div class="content_text">
                    <div>
                        <h3 class="headingVi">Ví Momo</h3>
                        <div class="textVi">Hiện nay việc sử dụng các ví điện tử rất tiện lợi đối với hầu hết mọi người. Một trong những ví điện tử có uy tín và độ tin dùng cao hiện nay là Momo.
                        </div>

                        <div class="textVi">Việc lưa chọn thanh toán bằng MoMo trên trang Lazada giúp người mua thanh toán một cách nhanh chóng, an toàn, đồng thời có thể tham gia chương trình tích lũy điểm để đổi ngay các phiếu quà tặng tại ứng dụng MoMo.
                        </div>
                    </div>

                    <div>
                        <h3 class="headingVi">Ví ZaloPay</h3>
                        <div class="textVi">Bạn muốn chọn thanh toán bằng Zalopay nhưng tài khoản Lazada vẫn chưa liên kết Zalopay, bạn hãy thực hiện theo 03 bước sau đây:
                        </div>
                        <div class="textVi">Bước 1: Chọn hình thức thanh toán ZaloPay. </div>
                        <div class="textVi">Bước 2: Liên kết tài khoản ZaloPay trên DreamTeam.</div>
                        <div class="textVi">Bước 3: Thông báo liên kết thành công.</div>
                    </div>

                    <div>
                        <h3 class="headingVi">Ví eM</h3>
                        <div class="textVi">Bạn sẽ có trải nghiệm thú vị về dịch vụ thanh toán trực tuyến an toàn, bảo mật bằng ví điện tử cho các giao dịch mua sắm trên sàn thương mại điện tử Lazada. Bằng việc sử dụng ví eM trên ứng dụng Lazada, giao dịch thanh toán trực tuyến của Bạn trên nền tảng thương mại điện tử Lazada sẽ được thực hiện dễ dàng và nhanh chóng
                        </div>.
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            @include('allcode.footer')
        </div>
    </div>

    @include('allcode.linkfooter')

</body>

</html>
