<!DOCTYPE html>
<html>
    <head>
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
                * {box-sizing: border-box}
                body{
                font-family: 'Noto Sans JP', sans-serif;
                }
                h1, label{
                color: DodgerBlue;
                }
                input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                width:100%;
                resize: vertical;
                padding:15px;
                border-radius:15px;
                border:0;
                box-shadow:4px 4px 10px rgba(0,0,0,0.2);
                }
                input[type=text]:focus, input[type=password]:focus {
                outline: none;
                }
                hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
                }
                button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
                }
                button:hover {
                opacity:1;
                }
                .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
                }
                .signupbtn {
                float: left;
                width: 100%;
                border-radius:15px;
                border:0;
                box-shadow:4px 4px 10px rgba(0,0,0,0.2);
                }
                .container {
                padding: 16px;
                }
                .clearfix::after {
                content: "";
                clear: both;
                display: table;
                }
        </style>

    </head>
    <body>
        @foreach ($news as $updateproduct )


        <form action="" method="post" enctype="multipart/form-data" >
            @method('PATCH')
            <div class="container">
              <h1>SỬA SẢN PHẨM</h1>
              <hr>
             <label for="namesp"><b>Tên sản phẩm</b></label>
              <input type="text" placeholder="Nhập tên sản phẩm" name="namesp"  value="{{$updateproduct -> tenSp}}" id="namesp" required>
             <label for="giasp"><b>Giá </b></label>
              <input type="text" placeholder="Nhập giá sản phẩm" name="giasp" value="{{$updateproduct -> gia}}" id="giasp" required>
             <label for="giaSale"><b>Giá sale</b></label>
              <input type="text" placeholder="Nhập giá sale" name="giaSale" value="{{$updateproduct -> giaSale}}" id="giaSale" required>
              <label for="loaiSp"><b>Loại sản phẩm</b></label>
              <input type="text" placeholder="Nhập loại sản phẩm" name="loaiSp" value="{{$updateproduct -> loaiSp}}" id="loaiSp" required>
              <label for="quantity"><b>Số lượng</b></label>
              <input type="text" placeholder="Nhập số lượng" name="quantity" value="{{$updateproduct -> quantity}}" id="quantity" required>
              <label for="imgsp"><b>Hình ảnh</b></label>
              <input type="file" placeholder="Nhập số lượng" name="imgsp"    id="file" required>
              <br>
              <br>
              <label for="property"><b>Property</b></label>
              <input type="text" placeholder="Nhập chi tiết sản phẩm" name="property" value="{{$updateproduct -> property}}"  id="property" required>
              <label for="hang"><b>Hãng</b></label>
              <input type="text" placeholder="Nhập hãng " name="hang" value="{{$updateproduct -> hang}}" id="hang" required>
            @endforeach
             <div class="clearfix">
                <button type="submit" class="btn_add_product">Edit Product</button>
              </div>
            </div>
            @csrf
        </form>

    </body>
</html>
