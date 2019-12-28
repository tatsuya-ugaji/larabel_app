@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1 class="title">毎月の収支を管理しよう！</h1>
    <div class="col-10 row mx-auto justify-content-around">
        <div class="col-md-6 col-sm-12">
            <img class="w-75" class="main_visual" src="image/main_visual.png" alt="">
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center">
            <div class="w-75 mx-auto">
                <a href="/login" class="btn btn-pink btn-block btn_login">ログイン</a>
                <a href="/register" class="btn btn-pink btn-block">ユーザー登録</a>
            </div>
        </div>
    </div>
</div>
@endsection
