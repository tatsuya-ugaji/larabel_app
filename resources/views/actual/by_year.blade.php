@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page_title">
                <div class="flote-left">
                    <h2>年次実績</h2>
                </div>
                <div class="">
                    <span><h2 class="d-inline">{{ $date->year }} 年</h2></span>
                </div>
                @include('components.date_select')
            </div>
            <table class="table table-bordered table-year">
                <thead>
                    <tr>
                        <th></th>
                        @for($i = 1; $i <= 12 ; $i++)
                        <th class="text-center w-month">{{$i}}月</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr> <!-- 配列で表示する ひとまずダミーデータ-->
                        <th class="text-center">収  入</th>
                        @for($i = 1;$i <= 12;$i++)
                        <td class="text-right">{{ number_format($income[$i]) }}</th>
                        @endfor
                    </tr>
                    <tr>
                        <th class="text-center">支  出</th>
                        @for($i = 1;$i <= 12;$i++)
                        <td class="text-right">{{ number_format($expenses[$i]) }}</th>
                        @endfor
                    </tr>
                    <tr>
                        <th class="text-center">貯  金</th>
                        @for($i = 1;$i <= 12;$i++)
                        <td class="text-right">{{ number_format($difference[$i]) }}</th>
                        @endfor
                    </tr>
                    <tr>
                        <th class="text-center">累  計</th>
                        @for($i = 1;$i <= 12;$i++)
                        <td class="text-right">{{ number_format($total[$i]) }}</th>
                        @endfor
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
