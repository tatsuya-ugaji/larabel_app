@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page_title">
                <div class="flote-left">
                    <h2>月次予実</h2>
                </div>
                <div class="">
                    <span><h3 class="d-inline">{{ $date->year }} 年 {{ $date->month }} 月</h3></span>
                </div>
                @include('components.date_select')
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th></th><th>予算</th><th>実績</th><th>差額</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bp as $item)
                    <tr>
                        @if($item[1] > 0 or $item[2] > 0)
                        <td class="text-center">{{ $item[0] }}</td>
                        <td class="text-right">
                            @if($item[4] == 1)
                                ▲
                            @endif
                            {{ number_format($item[1]) }}
                        </td>
                        <td class="text-right">
                            @if($item[4] == 1)
                                ▲
                            @endif
                            {{ number_format($item[2]) }}
                        </td>
                        <td class="text-right">
                            {{ number_format($item[3]) }}
                        </td>
                        @endif
                    </tr>
                    @endforeach
                    <tr>
                        <td class="text-center">合計</td>
                        <td class="text-right">{{ number_format($total['b_total']) }}</td>
                        <td class="text-right">{{ number_format($total['a_total']) }}</td>
                        <td class="text-right">{{ number_format($total['d_total']) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
