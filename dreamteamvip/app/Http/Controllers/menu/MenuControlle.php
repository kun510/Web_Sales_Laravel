<?php

namespace App\Http\Controllers\menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuControlle extends Controller
{
    public function dienthoai(){
        return view ('menu.dienthoai');
    }
    public function laptop(){
        return view ('menu.laptop');
    }
    public function tablet(){
        return view ('menu.tablet');
    }
    public function phukien(){
        return view ('menu.phukien');
    }
    public function lienhe(){
        return view ('menu.contact');
    }
}
