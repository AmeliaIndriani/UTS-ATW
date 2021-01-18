<?php

namespace App\Http\Controllers;
use App\Models\Post;

class PostController extends Controller {
    function index () { 
        // // $data['list_user'] = User::has('produk')->get();
            $data['list_post'] = Post::all();
            return view('post.index', $data);
            // $data['list_user'] = User::withCount('produk')->get();
           
        // $data ['list_user'] = User:: all();
        // return view('user.index', $data);
        
    }
    function create(){
        return view('post.create');
    }
    function store(){
        $post= new Post;
        $post->judul_artikel= request('judul_artikel');
        $post->tanggal_upload= request('tanggal_upload');
        $post->penulis= request('penulis');
        $post->artikel= request('artikel');
        // $user->email= request('email');
        // $user->password= bcrypt(request('password'));
        $post->save();
        return redirect('post')->with('succes','Data berhasil ditambahkan');

    }
    function show(post $post){
        $data ['post'] = $post;
        return view ('post.show', $data);

    } 
    function edit(post $post){
        $data ['post'] = $post;
        return view ('post.edit', $data);

    }
    function update(post $post){
        $post->judul_artikel= request('judul_artikel');
        $post->tanggal_upload= request('tanggal_upload');
        $post->penulis= request('penulis');
        $post->artikel= request('artikel');
        $post->save();

        return redirect('post')->with('succes','Data berhasil diedit');

    }
    function destroy(post $post){
        $post ->delete();
        return redirect('post')->with('danger','Data berhasil dihapus');

    }




}



