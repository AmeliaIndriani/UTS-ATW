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
                                <div class ="form-group">
                                    <label  for ="" class ="control-label"> judul artikel </label>
                                    <input type="text" class="form-control" name="judul_artikel">
                                </div>
                                <div class ="form-group">
                                    <label  for ="" class ="control-label"> tanggal upload </label>
                                    <input type="text" class="form-control" name="tanggal_upload">
                                </div>
                                <div class ="form-group">
                                    <label  for ="" class ="control-label"> penulis </label>
                                    <input type="text" class="form-control" name="penulis">
                                </div>
                                <div class ="form-group">
                                    <label  for ="" class ="control-label">artikel</label>
                                    <textarea name="artikel" class="form-control"></textarea>
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

