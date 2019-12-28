@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>ログイン</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-8 mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"　placeholder="メールアドレス" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"　placeholder="パスワード" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            ログイン状態を保存する
                        </label>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-pink btn-block" type="submit" name="" value="ログイン">
                    </div>
                    <!-- @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            パスワードをお忘れですか？
                        </a>
                    @endif -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
