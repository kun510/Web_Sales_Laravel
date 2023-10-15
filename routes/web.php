<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menu\MenuControlle;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\themsuaxoaColler;
use App\Http\Controllers\customer\chamsockhcontroller;
use App\Http\Controllers\login_dki\loginController;
use App\Http\Controllers\login_dki\RegisterController;
use App\Http\Controllers\login_dki\LogoutController;
use App\Http\Controllers\user\userController;
use App\Models\themsuaxoaModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
//dan hien thi san pham

//end hien thi san pham
// start khachhang
Route::get('/csdt',[chamsockhcontroller::class,'csdt'] );
Route::get('/csbh',[chamsockhcontroller::class,'csbh'] );
Route::get('/csdh',[chamsockhcontroller::class,'csdh'] );
Route::get('/csbanhang',[chamsockhcontroller::class,'csbanhang'] );
Route::get('/csgh_thanhtoan',[chamsockhcontroller::class,'csgh_thanhtoan'] );
// end khachhang

// start menu
Route::get('/dienthoai',[MenuControlle::class,'dienthoai'] );
Route::get('/laptop',[MenuControlle::class,'laptop'] );
Route::get('/tablet',[MenuControlle::class,'tablet'] );
Route::get('/phukien',[MenuControlle::class,'phukien'] );
Route::get('/contact',[MenuControlle::class,'lienhe'] );
// end menu



// login
Route::get('/login',[loginController::class,'login'] )->name('login');
Route::post('/login/store',[loginController::class,'store']);

// register
Route::get('/register',[RegisterController::class,'register'] );
Route::post('/register/store',[RegisterController::class,'store']);

Route::get('/maxacnhan', function(){
    return view('dangnhapdki.maxacnhan');
});
Route::post('/maxacnhan/store',[RegisterController::class,'xacnhan'] );

//logout
Route::get('/logout',[LogoutController::class,'logout']);



//admin
// Route::get('/admin',[AdminController::class,'admin'] );


Route::middleware(['auth','Level'])->group(function(){
    Route::get('/admin',[AdminController::class,'admin'] )->name('admin');
    //addsp
    Route::get('/admin/addsp',[themsuaxoaColler::class,'addform']);
    Route::post('/admin/addsp/store',[themsuaxoaColler::class,'store']);
    //xoa
    Route::get('/admin/xoa/{idProduct}',[themsuaxoaColler::class,'xoasp']);
    Route::delete('/admin/xoa/{idProduct}',[themsuaxoaColler::class,'xoasp']);
    //edit
    Route::get('/admin/edit/{idProduct}',[themsuaxoaColler::class,'edit']);
    Route::patch('/admin/edit/{idProduct}',[themsuaxoaColler::class,'editproduct']);

    //view admin
    Route::get('/admin',[AdminController::class,'view']);
    Route::get('/admin/dienthoai',[AdminController::class,'dienthoaiadmin'] );
    Route::get('/admin/laptop',[AdminController::class,'laptopadmin'] );
    Route::get('/admin/tablet',[AdminController::class,'tabletadmin'] );
    Route::get('/admin/phukien',[AdminController::class,'phukienadmin'] );
    Route::get('/admin/contact',[AdminController::class,'contactadmin'] );
    //bill admin
    // Route::resource('bill', [AdminBillController::class,'AdminBillController']);
    // Route::get('/bill',[AdminBillController::class,'index']);


});



//user
// Route::get('/user',[userController::class,'user'] );
Route::middleware(['auth'])->group(function(){
    Route::get('/user',[userController::class,'user'] );
    //view
    Route::get('/user',[userController::class,'view']);
    Route::get('/user/dienthoai',[userController::class,'dienthoaiuser']);
    Route::get('/user/laptop',[userController::class,'laptopuser']);
    Route::get('/user/tablet',[userController::class,'tabletuser']);
    Route::get('/user/phukien',[userController::class,'phukienuser']);
    Route::get('/user/contact',[userController::class,'contactuser']);
    //cart
    Route::post('/user/cart/store/{idProduct}',[userController::class,'storecart']);
    Route::get('/user/cart',[userController::class,'cart']);
    Route::delete('/user/cart/delect/{idProduct}',[userController::class,'delectcart']);
    //pay
    Route::post('/user/pay/store/{idProduct}',[userController::class,'storepay']);
    Route::get('/user/pay',[userController::class,'pay']);
    //bill
    Route::post('/user/bill/store/{iduser}',[userController::class,'billStore']);
    Route::get('/user/bill',[userController::class,'bill']);
    Route::get('/user/billttok',[userController::class,'billok']);
    Route::post('/user/billttok/store/{iduser}',[userController::class,'billokStore']);
    //thanh toan momo
    Route::post('/momopay',[userController::class,'momopay']);

});
