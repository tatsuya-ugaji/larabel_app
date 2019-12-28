@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>予算</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h3>{{ $date->year }}年{{ $date->month }}月</h3>
                    </div>
                </div>
                @include('components.date_select')
            </div>
            @include('components.table',['bp' => 'budget'])
        </div>
    </div>
</div>
@endsection
