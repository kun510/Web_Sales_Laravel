<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    public function user(){
        return view('user.user');
    }
    public function dienthoaiuser(){
        $phone = 'phone';
        $product=DB::table('product')->where('loaiSp',$phone)->get();
        // dd($product);
        return view('user.dienthoai',compact('product'));

    }

    public function laptopuser(){
        $laptop = 'laptop';
        $product=DB::table('product')->where('loaiSp',$laptop)-> get();
        return view('user.laptop',compact('product'));


    }
    public function tabletuser(){
        $tablet = 'tablet';
        $product=DB::table('product')->where('loaiSp',$tablet)->get();
        return view('user.tablet',compact('product'));

    }
    public function phukienuser(){
        $phukien = 'phukien';
        $product=DB::table('product')->where('loaiSp',$phukien)->get();
        return view('user.phukien',compact('product'));
    }
    public function contactuser(){
        return view('user.contact');
    }
    public function view(){
        $product=DB::table('product')->get();
        // dd($product);
        return view('user.user',compact('product'));
    }
    public function cart(){
        $iduser = Session::get('iduser');

        $userproducts = DB::table('cart')->where('iduser',$iduser)->get();
        return view('user.cart', compact('userproducts'));
        // dd($iduser);
    }
    public function storecart(Request $request ,$idsp){
        $iduser = $request->iduser;
        Session::put('iduser', $iduser);
        $idsp = $request->idsp;
        $soluong = $request->soluong;
        $namesp = $request->tenSp;
        $giasp = $request->giaSale;
        $imgsp = $request->img;
        // dd($idsp);
        $check = DB::table('cart')->where([
            ['iduser',$iduser],
            ['idproduct',$idsp],
        ])->count();
        // dd($check);


        if($check == 0){

            DB::table('cart')
            ->insert(['iduser' => $iduser,'idproduct' => $idsp,'soluong' => $soluong,'tensp' => $namesp,'gia' => $giasp, 'img' => $imgsp, ]
            );
        }

        if($check != 0){
                DB::table('cart')
                ->where([
                    ['iduser',$iduser],
                    ['idproduct',$idsp],
                ])
                ->update(['soluong' => $soluong]);
        }
        return redirect('/user/cart/');



    }
    public function pay(){
        $iduser = Session::get('iduser');
        $payuser = DB::table('cart')->where('iduser',$iduser)->get();
        // dd($iduser);
        return view('user.pay',compact('payuser'));

    }
    public function storepay(Request $request ,$idsp){
        $iduser = $request->iduser;
        Session::put('iduser', $iduser);
        $idsp= $request->idProduct;
        $soluong = $request->soluong;
        $namesp = $request->tenSp;
        $giasp = $request->giaSale;
        $imgsp = $request->img;

        $check = DB::table('cart')->where([
            ['iduser',$iduser],
            ['idproduct',$idsp],
        ])->count();
        // dd($check);


        // if($check == 0){

        //     DB::table('cart')
        //     ->insert(['iduser' => $iduser,'idproduct' => $idsp,'soluong' => $soluong,'tensp' => $namesp,'gia' => $giasp, 'img' => $imgsp, ]
        //     );
        // }

        // if($check != 0){
        //         DB::table('cart')
        //         ->where([
        //             ['iduser',$iduser],
        //             ['idproduct',$idsp],
        //         ])
        //         ->update(['soluong' => $soluong]);
        // }
        return redirect('/user/pay/');



    }
    public function bill(){
        $iduser = Session::get('iduser');
        $bill = DB::table('cart')->where('iduser',$iduser)->get();
        // dd($iduser);
        return view('user.bill',compact('bill'));
    }
    public function billok(){
        $iduser = Session::get('iduser');
        $billok = DB::table('cart')->where('iduser',$iduser)->get();
        // dd($iduser);
        return view('user.billttok',compact('billok'));

    }
    public function billokStore(Request $request ,$idsp){
        $tinh = $request->tinh;
        Session::put('tinh', $tinh);

        $huyen = $request->huyen;
        Session::put('huyen', $huyen);

        $xa = $request->xa;
        Session::put('xa', $xa);

        $note = $request->note;
        Session::put('note', $note);

        $iduser = $request->iduser;
        Session::put('iduser', $iduser);
        $idsp= $request->idProduct;
        $soluong = $request->soluong;
        $namesp = $request->tenSp;
        $giasp = $request->giaSale;
        $imgsp = $request->img;

        $check = DB::table('cart')->where([
            ['iduser',$iduser],
            ['idproduct',$idsp],
        ])->count();
        // dd($check);



        return redirect('user.billttok');

    }


    public function billStore(Request $request ,$idsp){
        $tinh = $request->tinh;
        Session::put('tinh', $tinh);

        $huyen = $request->huyen;
        Session::put('huyen', $huyen);

        $xa = $request->xa;
        Session::put('xa', $xa);

        $note = $request->note;
        Session::put('note', $note);

        $iduser = $request->iduser;
        Session::put('iduser', $iduser);
        $idsp= $request->idProduct;
        $soluong = $request->soluong;
        $namesp = $request->tenSp;
        $giasp = $request->giaSale;
        $imgsp = $request->img;

        $check = DB::table('cart')->where([
            ['iduser',$iduser],
            ['idproduct',$idsp],
        ])->count();
        // dd($check);



        return redirect('/user/bill/');

    }
    //thanh toan momo
    public function execPostRequest($url, $data){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function momopay(Request $request){


        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        // $amount = $_POST["momovnpay"];
        // $amount = 10000;
        $amount = $request->momovnpay;
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/user/billttok";
        $ipnUrl = "http://127.0.0.1:8000/user/bill";
        $extraData = "";

            $requestId = time() . "";
            $requestType = "payWithATM";

            // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);

            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);

            $result =$this->execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json
            // dd($result);
            //Just a example, please check more in there
            return redirect()->to($jsonResult['payUrl']);


    }
    public function delectcart($idsp){
        $iduser = session::get('iduser');
        $check = DB::table('cart')->where([
            ['iduser',$iduser],
            ['idproduct',$idsp],
        ])->delete();
        return redirect()->back();
    }


}
