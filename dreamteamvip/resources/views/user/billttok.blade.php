<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/frontend/css/hoadon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Hoá Đơn</title>
</head>
<body>
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"/></div>
        <div class="company">DreamTeam_technology</div><br/>
        <div class="diachicpn"><i class="fas fa-map-marker-alt"></i> 34 dương thưởng, hoà cường bắc, Hải châu, Đà Nẵng </div>
        <div class="SDTcpn"><i class="fa-solid fa-mobile"></i> 0123456789</div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <div class="hoadon_ttkh">

  <?php
    $tinh = Session::get('tinh');
    $huyen =Session::get('huyen');
    $xa =Session::get('xa');
    $note = Session::get('note');

    ?>

    <div class="hotenkh">Khách Hàng: {{Auth::user()->username}}</div>
    <div class="sdtkh">Email:{{Auth::user()->email}}</div>
    <div class="diachikh">ĐỊA CHỈ:<?php echo("  " . $note . ", " . $xa . ", " . $huyen . ", " . $tinh) ?>  </div>
  </div>
  <br/>
  <table class="TableData">

  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>

  </tr>
    <?php
        $tamtinh = 0;
        $tongtamtinh = 0;
        $phigiaohang = 0;
        $tongtien = 0;
        $i= 0;
    ?>
    @foreach ($billok as $bill)
        <?php
            $tamtinh = $bill->soluong * $bill->gia;
        ?>
        <tr>
            <td>{{$i += 1}}</td>
            <td>{{$bill->tensp}}</td>
            <td>{{$bill->soluong}}</td>
            <td>{{$tamtinh}}</td>
        </tr>
        <?php
            $tongtamtinh += $tamtinh;
            $phigiaohang = 20000;
            $tongtien = $tongtamtinh + $phigiaohang

        ?>
    @endforeach
    <?php

    ?>


        <td colspan="4" class="tong">Phí Giao </td>
        <td class="cotSo"><?php echo $phigiaohang ?><sup>đ</sup></td>

        <tr>

      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo $tongtien ?><sup>đ</sup></td>
    </tr>
     </table>
    <div class="day">
        <div class="dayleft">
            <!-- <div class="footer-left" id="hvn"></div>
            <div class="footer-bot"> Khách hàng</div> -->
        </div>

        <div class="dayright">
            <div class="footer-right" id="hvm"></div>
            <div class="footer-bot">DREAMTEAM</div>
        </div>
    </div>
    <div class="nutbill">
        <div class="inrahoadon">
            <button class="inhoadon" onclick="window.print();">IN hoá đơn</button>
        </div>

    </div>

</div>
</body>
    <script>
    var today = new Date();
    var date ="Đà Nẵng, Ngày"+ '  ' + today.getDate()+ '  ' +"Tháng"+ '  ' + (today.getMonth()+1) + '  '+"Năm" + '  '+ today.getFullYear();
    var time = today.getHours() + "H" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;

    // document.getElementById("hvn").innerHTML = dateTime;
    document.getElementById("hvm").innerHTML = dateTime;

    </script>
</html>
