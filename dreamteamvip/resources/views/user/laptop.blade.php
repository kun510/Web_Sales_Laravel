
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/css/laptop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Lap top</title>
</head>

<body>
    <div class="all">
        @include('allcode.headuser')

        <div class="main">
            <div class="product_leftbar">
                <h2 class="leftbar">Hãng Sản Phẩm</h2>
                <ul>
                    <li><a href="">Iphone</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">Nokia</a></li>
                    <li><a href="">Sony</a></li>
                    <li><a href="">Xiaomi</a></li>
                    <li><a href="">Vivo</a></li>
                </ul>

                <h2 class="leftbar">Mức giá</h2>
                <ul>
                    <li><a href="">Dưới 2 triệu</a></li>
                    <li><a href="">Từ 2 - 4 triệu</a></li>
                    <li><a href="">Từ 4 - 7 triệu</a></li>
                    <li><a href="">Từ 7 - 15 triệu</a></li>
                    <li><a href="">Trên 15 triệu</a></li>
                </ul>

                <h2 class="leftbar">Tính năng đặc biệt</h2>
                <ul>
                    <li><a href="">Bảo mật vân tay</a></li>
                    <li><a href="">Nhận diện khuôn mặt</a></li>
                    <li><a href="">Chống nước, chống bụi</a></li>
                    <li><a href="">Sạc nhanh</a></li>
                </ul>

                <h2 class="leftbar">Dung lượng pin</h2>
                <ul>
                    <li><a href="">Dưới 3000 mah</a></li>
                    <li><a href="">Từ 3000 - 4500 mah</a></li>
                    <li><a href="">Từ 4500 - 5500 mah</a></li>
                    <li><a href="">Trên 5500 mah</a></li>
                </ul>

                <h2 class="leftbar">Màn hình</h2>
                <ul>
                    <li><a href="">Màn hình nhỏ: dưới 5.0 inch</a></li>
                    <li><a href="">Màn hình vừa: 6.0 inch</a></li>
                    <li><a href="">Trên 6.0 inch</a></li>
                    <li><a href="">Màn hình gập</a></li>
                    <li><a href="">Màn hình cuộn</a></li>
                </ul>

                <h2 class="leftbar">Camera</h2>
                <ul>
                    <li><a href="">Camera 3D</a></li>
                    <li><a href="">AI camera</a></li>
                    <li><a href="">Thu phóng quang học 4x</a></li>
                    <li><a href="">Chống rung</a></li>
                    <li><a href="">Camera ban đêm</a></li>
                </ul>

                <h2 class="leftbar">Ưu đãi trả góp</h2>
                <ul>
                    <li><a href="">Trả góp 0%</a></li>
                    <li><a href="">Trả góp 0<sup>đ</sup></a></li>
                    <li><a href="">Trả góp 0%/0<sup>đ</sup></a></li>
                </ul>
            </div>

            <div class="product_featured">
                <div class="product_heading">
                    <hr>
                    <h1 class="">Laptop Nổi Bật</h1>
                    <hr>
                </div>


                    <div class="product_main">

                        @foreach ($product as $product )
                        @csrf
                            <div class="product_item">


                                    <div class="product_item_img">
                                        <img src="{{asset('/imgProduct/'.$product ->imgProduct)}}" alt="">
                                    </div>
                                <div class="product_item_info">
                                    <div class="product_item_name">
                                        <span>{{$product->tenSp}}</span>
                                    </div>
                                    <div class="product_item_price">
                                        <div class="product_item_price_old">
                                            {{$product->gia}}<sup>đ</sup>
                                        </div>

                                        <div class="product_item_price_new">
                                            {{$product->giaSale}}<sup>đ</sup>
                                        </div>
                                    </div>
                                    <form action="/user/cart/store/{{$product->idProduct}}" method="POST">
                                        @csrf
                                        <div class="product_item_cart">
                                            <input type="number" name="soluong" min="1" max="10" value="1" />
                                            <input class="product_item_cart_btn" type="submit" name="addcart" value="Ðặt hàng" />
                                            <!-- <a href="./getIdCart.php?key=23" class="product_item_cart_btn">
                                                      <span>THÊM VÀO GIỎ HÀNG</span>
                                            </a> -->
                                            <input type="hidden" name="tenSp" value="{{$product->tenSp}}" />
                                            <input type="hidden" name="idsp" value="{{$product->idProduct}}" />
                                            <input type="hidden" name="giaSale" value=" {{$product->giaSale}}" />
                                            <input type="hidden" name="iduser" value="{{Auth::user()->id}}" />
                                            <input type="hidden" name="img" value="{{($product->imgProduct)}}" />
                                        </div>

                                    </form>

                                </div>

                            </div>
                        @endforeach
                    </div>



            </div>
        </div>

        <div class="footer">
            <div class="footer_container">
                <div class="footer_link footer_item">
                    <h3 class="footer_heading ">LIÊN KẾT</h3>
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./dienthoai">Điện thoại</a></li>
                        <li><a href="./laptop">Laptop</a></li>
                        <li><a href="./tablet">Máy tính bảng</a></li>
                        <li><a href="./phukien">Phụ kiện</a></li>
                        <li><a href="./contact">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="footer_info footer_item">
                    <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                    <ul>
                        <li><a href="">Giới thiệu DreamTeam</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                    </ul>
                </div>

                <div class="footer_support footer_item">
                    <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                    <ul>
                        <li><a href="">Giao hàng và thanh toán</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Hướng dẫn đặt hàng</a></li>
                        <li><a href="">Hướng dẫn bán hàng</a></li>
                    </ul>
                </div>

                <div class="footer_contact footer_item">
                    <h3 class="footer_heading">THÔNG TIN LIÊN HỆ</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> 666 ABC3 Nguyễn Hữu Thọ, Phường 22, Hải Châu, Tp.Đà Nẵng</li>
                        <li><i class="fa fa-phone"></i><a href="tel:0123456789"> 0123 456 789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:dreamteam@gmail.com"> dreamteam@gmail.com</a></li>
                        <li><i class="fab fa-facebook"></i><a href=""> Facebook</a></li>
                        <li><i class="fab fa-instagram"></i><a href=""> Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_copyright">Copyright © 2022 Bản quyền thuộc về DreamTeam
                <!-- © Bản quyền thuộc về Trần Cường, Nguyễn Thanh Tiến, Đỗ Vạn Lâm -->
            </div>
        </div>
    </div>

    <script src="./assets/js/media.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
