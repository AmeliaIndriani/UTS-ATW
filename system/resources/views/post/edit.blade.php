@extends('template.base')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class ="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                             Tambah Data Artikel
                        </div>
                        <div class ="card-body">
                            <form action="{{url('post')}}" method="post">
                                @csrf
                                @method("PUT")
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> Judul artikel</label>
                                        <input type="text" class="form-control" name="judul_artikel" value = "{{$post->judul_artikel}}">
                                    </div>
                                    <div class="row no">
                                        <div class="col-md-6">
                                            <div class ="form-group">
                                                <label  for ="" class ="control-label"> Tanggal upload </label>
                                                <input type="text" class="form-control" name="tanggal_upload" value = "{{$post->tanggal_upload}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class ="form-group">
                                                <label  for ="" class ="control-label"> Penulis </label>
                                                <input type="text" class="form-control" name="penulis" value = "{{$post->penulis}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class ="form-group">
                                                <label  for ="" class ="control-label"> Artikel </label>
                                                <textarea name="artikel" class="form-control" name="artikel" value = "{{$post->artikel}}"></textarea>
                                                {{-- <input type="text" class="form-control" name="artikel" value = "{{$post->artikel}}"> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> deskripsi </label>
                                        <textarea name="deskripsi" class="form-control" > {{$produk->deskripsi}} </textarea>
                                    </div>
                                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i>simpan</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
