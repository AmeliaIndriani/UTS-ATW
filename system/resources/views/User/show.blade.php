@extends('template.base')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class ="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                             Detail Data User
                        </div>
                        <div class="card-body">
                            <h3>{{$user->nama}}</h3>
                            <hr>
                            <p>
                                {{ "@".$user->username }} |
                                email : {{$user->email}} 
                            </p> 
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
