<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\themsuaxoaRequest;
use App\Models\c;
use App\Models\themsuaxoaModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class themsuaxoaColler extends Controller
{

    public function addform(){
        return view('admin.addsp');
    }
   // CreatFormRequest
   public function store(Request  $request){
    // dd($request -> input());
    $OperationProduct = new themsuaxoaModel();
    if($request ->has('imgsp')){
        $file = $request -> imgsp;
        $ext = $request -> imgsp ->extension();
        $file_name = time(). '.'.$ext;
        $file -> move(public_path('imgProduct'),$file_name);

    }

    $OperationProduct['tenSp']= $request->namesp;
    $OperationProduct['gia']= $request->giasp;
    $OperationProduct['giaSale']= $request->giaSale;
    $OperationProduct['loaiSp']= $request->loaiSp;
    $OperationProduct['quantity']= $request->quantity;
    $OperationProduct['imgProduct']= $file_name;
    $OperationProduct['property']= $request->property;
    $OperationProduct['hang']= $request->hang;




    // dd($request);
    $OperationProduct -> save();
    return redirect('/admin');

}
    public function xoasp($idProduct){
        DB::table('product')->where('idProduct',$idProduct)->delete();
        return redirect('/admin');
    }
    //edit product
    public function edit($idProduct){
        $editProduct = DB::select('select * from product where idProduct = ? ',[$idProduct]);
        return view('admin.edit',['news'=>$editProduct]);
    }
    public function editproduct(Request $request, $idProduct){



        $namesp= $request->input('namesp');
        $gia= $request->input('giasp');
        $giasale= $request->input('giaSale');
        $loaisp= $request->input('loaiSp');
        $soluong= $request->input('quantity');
        if($request -> has('imgsp')){
            $file = $request -> imgsp;
            $ext = $request -> imgsp -> extension();
            $file_name = time().'.'.$ext;
            $file -> move(public_path('imgProduct'),$file_name);
        }
        $imgProduct= $file_name;
        $proprty= $request->input('property');
        $hang= $request->input('hang');
        DB::table('product')
            ->where('idProduct',$idProduct)
            ->update(['tenSp'=>$namesp,
                        'gia'=>$gia,
                        'giaSale'=>$giasale,
                        'loaiSp'=>$loaisp,
                        'quantity'=>$soluong,
                        'imgProduct'=>$imgProduct,
                        'property'=>$proprty,
                        'hang'=>$hang]);
        return redirect('/admin');
    }
}
