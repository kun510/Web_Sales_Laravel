<?php

namespace App\Http\Controllers\login_dki;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class loginController extends Controller
{
    //
    public function login(){
        return view('dangnhapdki.login');

    }
    public function store(Request $request){
        // dd($request->input());
        $email = $request -> input('email');
        $password = $request -> input('password');
        if(Auth::attempt([
            'email' => $email,
            'password' => $password,
        ])) {
            $user = User::where('email', $email) -> first();
            Auth::login($user);
            return redirect('/admin');
        }

        Session::flash('error', "Email hoặc Passwork không đúng");
        Session::flash('success', "Đăng nhập thành công");


        return redirect('/');

    }
}
