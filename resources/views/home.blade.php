@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                @if($detect->isMobile() || $detect->isTablet())
                <div class="flote-left">
                    <h2>ホーム</h2>
                </div>
                <div class="row justify-content-between mb-3">
                    <div class="col-6">
                        <h3>{{ $date->year }}年{{ $date->month }}月</h3>
                    </div>
                    <div class="col-4  text-right">
                        <a href="/actual/register" class="btn btn-pink">入力する</a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <h3>今月の支出</h3>
                </div>
                <div class="col-12 text-center mb-3">
                    <h1 class="">￥{{ number_format($total) }}</h1>
                </div>
                <div class="row justify-content-between">
                    <form class="col-12" action="/home" method="post">
                        @csrf
                        @include('components.date_select')
                    </form>

                    <div class="col-4"></div>
                </div>
                @else
                <div class="flote-left">
                    <h2>ホーム</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h3>{{ $date->year }}年{{ $date->month }}月</h3>
                    </div>
                    <div class="col-4 text-center">
                        <h3>今月の支出</h3>
                    </div>
                    <div class="col-4  text-right">
                        <a href="/actual/register" class="btn btn-pink">入力する</a>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <form class="col-4" action="/home" method="post">
                        @csrf
                        @include('components.date_select')
                    </form>
                    <div class="col-4 text-center">
                        <h1 class="">￥{{ number_format($total) }}</h1>
                    </div>
                    <div class="col-4"></div>
                </div>
                @endif
            </div>
            @include('components.table',['bp' => 'actual'])
        </div>
    </div>
</div>
@endsection
