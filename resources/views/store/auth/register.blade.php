@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('店舗登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('店舗名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="○○店、××運営" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('ジャンル') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="genre_id" autocomplete="genre_id">
                                    <option value="1">飲食店</option>
                                    <option value="2">スポーツ</option>
                                    <option value="3">その他</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('責任者名') }}</label>
    
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="rep_first_name" placeholder="名前" autocomplete="rep_first_name">
                                    <input type="text" class="form-control" name="rep_last_name" placeholder="苗字" autocomplete="rep_last_name">
                                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="login_id" class="col-md-4 col-form-label text-md-right">{{ __('ログインID') }}</label>

                            <div class="col-md-6">
                                <input id="login_id" type="text" class="form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}"  placeholder="半角英数字" required autocomplete="login_id">

                                @error('login_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="メールアドレス" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>        
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="TEL" placeholder="000-0000-0000" autocomplete="TEL">
                                <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>            
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code" placeholder="999-9999" autocomplete="postal_code">
                                <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="半角英数字" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="半角英数字" required autocomplete="new-password">
                            </div>
                        </div>

                        <input type="hidden" name="postal_code" value="999-9999" autocomplete="postal_code">
                        <input type="hidden" name="street_addr" value="addr" autocomplete="street_addr">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
