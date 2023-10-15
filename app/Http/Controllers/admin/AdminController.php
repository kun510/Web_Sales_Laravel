<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    //
    public function admin(){
        return view('admin.admin');
    }
    public function dienthoaiadmin(){
        return view('admin.dienthoai');
    }
    public function laptopadmin(){
        return view('admin.laptop');
    }
    public function tabletadmin(){
        return view('admin.tablet');
    }
    public function phukienadmin(){
        return view('admin.phukien');
    }
    public function contactadmin(){
        return view('admin.contact');
    }
    public function view(){
        $product=DB::table('product')->get();
        // dd($product);
        return view('admin.admin',compact('product'));
    }
}
