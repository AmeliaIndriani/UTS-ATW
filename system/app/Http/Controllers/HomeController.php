<?php

namespace App\Http\Controllers;
use App\Models\Post;


class HomeController extends Controller {

    function showwelcome(){
        return view('welcome');
    }

    function showhome(){
        $dataa['list_post'] = Post:: all();
        // $data ['list_produk'] = produk:: all();
        // $nama = request('nama');
        // $dataaa ['list_produk'] = produk:: where('nama','like', "%$nama%")->get();

        return view('home', $dataa);
        // return view('home');
    }
     
    function showberanda(){
        return view('beranda');
    }
    function showpostblog(){
        $data['list_post'] = Post:: all();
        return view('postblog',$data);
        // return view('postblog');
    }

    



}
