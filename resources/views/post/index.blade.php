@extends('template.base')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class ="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            Data Artikel
                        <a href="{{url('post/create')}}" class="btn-btn-dark float-right "> <i class="fa fa-plus"></i>Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead> 
                                    <th> No </th>
                                    <th> Aksi</th>
                                    <th> Judul artikel</th>
                                    <th> Tanggal upload</th>
                                    <th> Penulis</th>
                                    <th> Artikel</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_post as $post)
                                    <tr>
                                        <td> {{$loop->iteration}}</td>
                                        <td>
                                            <div class ="btn-group">
                                                <a href="{{url('post', $post->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a> 
                                                <a href="{{url('post', $post->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete' , ['url'=> url('post', $post->id)])    
                                            </div>
                                        </td>
                                        <td> {{$post-> judul_artikel}} </td>
                                            <td> {{$post-> tanggal_upload}} </td>
                                            <td> {{$post-> penulis}}</td>
                                            <td> {{$post-> artikel}}</td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        {{-- <td> {{$post-> judul artikel}} </td>
                                        <td> {{$post-> tanggal upload}} </td>
                                        <td> {{$post-> penulis}} </td>
                                        <td> {{$post-> artikel}} </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
