<span class="form-row align-items-center mt-1">
    <div class="col-auto">
        <select class="" name="year" id="year">
            @foreach($years as $year)
                @if($date->year == $year)
                <option selected value="{{ $year }}">{{ $year }}年</option>
                @else
                <option value="{{ $year }}">{{ $year }}年</option>
                @endif
            @endforeach
        </select>
    </div>
    @if (Request::is('actual/'.$date->year))
    @else
    <div class="col-auto">
        <select class="" name="month" id="month">
            @for($i = 1; $i <= 12 ; $i++)
                @if($date->month == $i)
                <option selected value="{{ $i }}">{{ $i }}月</option>
                @else
                <option value="{{ $i }}">{{ $i }}月</option>
                @endif
            @endfor
        </select>
    </div>
    @endif
    <div class="col-auto">
        @if (Request::is('home'))
        <input type="submit" class="btn-sm btn-pink" value="OK">
        @elseif(Request::is('budget/register'))
        <p class="d-inline">まで発生する</p>
        @else
        <button class="btn-sm btn-pink" onclick="date_change();">OK</botton>
        @endif
    </div>
</span>
