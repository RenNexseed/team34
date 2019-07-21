@extends('layouts.app')

@section('content')

<!-- Extra large modal -->
<div class="text-center mt-5 mb-5">
  <button type="button"  class="btn btn-info moji1" data-toggle="modal" data-target=".bd-example-modal-xl">ヘルプ</button>

  <!-- 『ヘルプ』モーダル -->
  <div class="modal fade bd-example-modal-xl moji1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        はじめてご利用の方は右上の新規登録を押してみましょう。<br>
        すでに登録したことがある方はこの画面のままログインをしましょう。<br>
        <img src="{{url('../images/login01.png')}}" class="img3">
      </div>
    </div>
  </div>
  <!-- 『ヘルプ』モーダル終わり -->

</div>
<div class="container margin-mxauto">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="border: double 5px #5c9ee7;">
        <div class="card-header text-center" style="color: #010079;text-shadow: 0 0 5px white;padding: 0.3em 0.5em;background: -webkit-repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);background: repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);">
          <h2>{{ __('ログイン画面') }}</h2>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf


            <!-- メールアドレス入力 -->
            <div class="form-group row">
              <h1 for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメールアドレス') }}</h1>

              <div class="col-md-6">
                <input id="email" type="email" size="25" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal">
                  ヘルプ
                </button>

                <!-- 『メールアドレス』モーダル -->
                <div class="modal fade moji1" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">メールアドレスを入力してみましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        以前に登録したメールアドレスを入力しましょう。<br>
                        例）hajimete@gmail.com
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『メールアドレス』モーダル終わり -->

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『メールアドレス』入力終わり -->


            <!-- 『パスワード』入力 -->
            <div class="form-group row">
              <h1 for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</h1>

              <div class="col-md-6">
                <input id="password" type="password" size="25" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal1">
                  ヘルプ
                </button>

                <!-- 『パスワード』モーダル -->
                <div class="modal fade moji1" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">パスワードを決めましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        以前に登録したパスワードを<br>入力しましょう。<br>
                        例）hajimete34
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『パスワード』モーダル終わり -->

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『パスワード』入力終わり -->


            <!-- 『パスワードを記憶する』 -->
            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('パスワードを記憶する') }}
                  </label>
                </div>
              </div>
            </div>
            <!-- 『パスワードを記憶する』終わり -->

            <!-- 『ログイン』ボタン -->
            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <label for="trigger" class="open_button btn btn-primary text-center btn-lg">{{ __('ログイン') }}</label>

                <!-- 『ログイン』モーダル -->
                <div class="modal_wrap moji1">
                  <input id="trigger" type="checkbox">
                  <div class="modal_overlay">
                    <label for="trigger" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger" class="close_button">✖️</label>
                      <h2 style="text-align: center;" class="border-bottom">ログイン画面</h2>
                      <h3 style="text-align: center;">入力された情報でログインします。</h3>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          {{ __('ログインする') }}
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『ログイン』モーダル終わり -->

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('パスワードをお忘れですか？') }}
                </a>
                @endif

              </div>
            </div>
            <!-- 『ログイン』ボタン終わり -->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
