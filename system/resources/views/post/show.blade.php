@extends('template.base')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class ="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                {{-- Detail Post --}}
                            </div>
                            <div class ="card-body">
                            <h3> {{$post->judul_artikel}}</h3>
                            <hr>
                            <p> 
                                Tanggal upload : {{$post->tanggal_upload}} 
                            </p>
                            <p> 
                                Penulis: {{$post->penulis}}
                            </p>
                            <p>
                                Artikel : {{$post->artikel}}
                                {{-- {!! nl2br ($produk->deskripsi) !!} --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection