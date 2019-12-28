@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>予算登録</h2>
                </div>
            </div>
            @include('components.form',['btn_text' => '登録','action' => 'register'])
        </div>
    </div>
</div>
@endsection
@include('components.script')
