@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>カテゴリ一覧</h2>
                </div>
            </div>
        </div>
        <form name="category" class="" action="/category/show" method="post">
            @csrf
            <div class="col-8 mx-auto">
                <div class="row justify-content-between">
                    <div class="col p-0 text-right">
                        <input class="mb-2 btn btn-pink" type="submit" name="" value="更新">
                    </div>
                    <div class="" id="app">
                        <div class="row justify-content-between">
                            <categories-edit></categories-edit>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
