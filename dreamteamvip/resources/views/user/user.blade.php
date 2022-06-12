<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('allcode.head')
    </head>
    <body class="antialiased">
        <div class="all">
            @include('allcode.headuser')

            <div class="main">

                <div class="slider">
                    <i class="fa fa-angle-left slider-prev"></i>
                    <ul class="slider-dots">
                        <li class="slider-dot-item active" data-index="0"></li>
                        <li class="slider-dot-item" data-index="1"></li>
                        <li class="slider-dot-item" data-index="2"></li>
                        <li class="slider-dot-item" data-index="3"></li>
                        <li class="slider-dot-item" data-index="4"></li>
                    </ul>
                    <div class="slider-wrapper">
                        <div class="slider-main">
                            <div class="slider-item">
                                <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/01/Samsung-Galaxy-S22-Ultra-Black-Renders-2048x1153.png" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://www.asus.com/WebsitesBanner/VN/banners/krwnr6g0sftcvu9d/krwnr6g0sftcvu9d-0_0_desktop_1X.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://cdn.mos.cms.futurecdn.net/WN8YGBZ2S3ULmHM4ceSSB7.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://didongviet.vn/tin-tuc/wp-content/uploads/2021/03/dai-dien-iphone-flip-didongviet.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://cellphones.com.vn/sforum/wp-content/uploads/2021/04/tong-hop-thong-tin-iPhone-13-1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <i class="fa fa-angle-right slider-next"></i>
                </div>

                <div class="product_display">
                    <div class="prod_display_img">
                        <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/02/1-12.jpeg" alt="">
                    </div>

                    <div class="prod_display_img">
                        <img src="https://images.macrumors.com/t/V4f_3wR-6CZghhi2Iv8qr5FOgzw=/800x0/article-new/2019/07/foldpad-filmic-twitter.jpg?lossy" alt="">
                    </div>

                    <div class="prod_display_img">
                        <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/02/vivo-nex-5-render-1_1280x720-800-resize.jpg" alt="">
                    </div>
                </div>

                <div class="product_featured">
                    <div class="product_heading">
                        <hr>
                        <h1 class="">Sản Phẩm Nổi Bật</h1>
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



                    <div class="product_heading">
                        <hr>
                        <h1 class="">Sản Phẩm Khuyến Mãi</h1>
                        <hr>
                    </div>

                    <div class="product_main">

                        <div class="product_item">
                            <div class="product_item_img">
                                <img src="" alt="">
                            </div>

                            <div class="product_item_info">
                                <div class="product_item_name">
                                    <span>dddd</span>
                                </div>

                                <div class="product_item_price">
                                    <div class="product_item_price_old">
                                        43245234214<sup>đ</sup>
                                    </div>

                                    <div class="product_item_price_new">
                                        432141234<sup>đ</sup>
                                    </div>
                                </div>

                                <div class="product_item_cart">
                                <a href="./insertcart.php?key= 1" class="product_item_cart_btn">
                                        <span>THÊM VÀO GIỎ HÀNG</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer">
                @include('allcode.footer')
            </div>
        </div>

    </body>
    @include('allcode.linkfooter')
</html>
