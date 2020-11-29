<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    function showlogin(){
        return view('login');
    }

    function loginprocess(){
        if (Auth::attempt(['email'=> request('email'),'password' => request('password')])){
            return redirect('beranda')->with ('success','login berhasil');
        }else{
            return back()->with('danger','login gagal, silahkan cek email dan password');
        }

    }
    function logout(){
        Auth::logout();
        return redirect('home');
    }

    function showregistrasi(){
        return view('registrasi');
    }
    function storeregistrasi(){
        $user= new user;
        $user->nama= request('nama');
        $user->username= request('username');
        $user->email= request('email');
        $user->password= bcrypt(request('password'));
        $user->save();

        return redirect('login')->with('succes','Anda sudah terdaftar, Silahkan Login!');
    }

}