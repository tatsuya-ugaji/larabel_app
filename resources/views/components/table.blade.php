<table class="table table-bordered">
    <thead>
        <tr class="text-center">
            <th>日付</th><th>カテゴリ</th><th>金額</th><th>備考</th>
        </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
        <tr>
            <td class="text-center">
                <a href="{{ url('/'.$bp.'/edit/'.$item->id ) }}">
                    @if($detect->isMobile() || $detect->isTablet())
                    @php
                        $i = substr($item->actual_date,-2)
                    @endphp
                        {{ $i }}日
                    @else
                    {{ $item->actual_date }}
                    @endif
                </a>
            </td>
            <td class="text-center">{{ $item->category }}</td>
            <td class="text-right">
                @if($item->bp_flg == 1)
                    ▲
                @endif
                {{ number_format($item->amount) }}
            </td>
            <td>{{ $item->remarks }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
