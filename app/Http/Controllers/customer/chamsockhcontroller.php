<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chamsockhcontroller extends Controller
{
    public function csdt(){
        return view ('customer_support.chinhsachdoitra');
    }
    public function csbh(){
        return view ('customer_support.chinhsachbaohanh');
    }
    public function csbanhang(){
        return view ('customer_support.huongdanbanhang');
    }
    public function csdh(){
        return view ('customer_support.huongdandathang');
    }
    public function csgh_thanhtoan(){
        return view ('customer_support.giaohangvathanhtoan');
    }
}
