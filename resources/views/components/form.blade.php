<div class="col-md-6 col-sm-8 mx-auto" onload="change_bpflg();">
    <form class="" action="{{ $action }}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <div class="form-group">
            @if(isset($param->actual_date))
            <input type="date" class="form-control @error('actual_date') is-invalid @enderror" name="actual_date" value="{{ $param->actual_date }}" autofocus>
            @else
            <input type="date" class="form-control @error('actual_date') is-invalid @enderror" name="actual_date" value="{{ old('actual_date') }}" autofocus>
            @endif
            @if ($errors->has('actual_date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('actual_date') }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <select id="bp_flg" class="form-control" name="bp_flg" onchange="change_bpflg();">
                @if(isset($param->bp_flg))
                    @if($param->bp_flg == 0)
                    <option selected value="0">収入</option>
                    <option value="1">支出</option>
                    @else
                    <option value="0">収入</option>
                    <option selected value="1">支出</option>
                    @endif
                @else
                <option value="0" @if(old('bp_flg')=='0') selected  @endif>収入</option>
                <option value="1" @if(old('bp_flg')=='1') selected  @endif>支出</option>
                @endif
            </select>
        </div>
        <div class="form-group"><!-- カテゴリを配列で渡して表示する -->
            <select id="category" name="category" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            @if(isset($param->amount))
            <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $param->amount }}" placeholder="金額" autofocus>
            @else
            <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" placeholder="金額" autofocus>
            @endif
            @if ($errors->has('amount'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('amount') }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            @if(isset($param->remarks))
            <textarea class="form-control" type="textarea" name="remarks" value=""　placeholder="備考">{{ $param->remarks }}</textarea>
            @else
            <textarea class="form-control" type="textarea" name="remarks" value=""　placeholder="備考"></textarea>
            @endif
        </div>
        @if (Request::is('budget/register'))
        <div class="form-group form-inline">
            <input class="" type="hidden" name="repeat" value="0">
            <input class="mr-2" type="checkbox" name="repeat" value="1">
            @include('components.date_select')
        </div>

        @endif
        <div class="form-group">
            <input class="btn btn-pink btn-block" type="submit" name="" value="{{ $btn_text }}">
        </div>
    </form>
</div>
