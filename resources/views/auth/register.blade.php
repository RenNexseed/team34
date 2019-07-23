@extends('layouts.app')

@section('content')
<div class="text-center mt-5 mb-5">
  <button type="button"  class="btn btn-info moji1" data-toggle="modal" data-target=".bd-example-modal-xl">ヘルプ</button>

  <!-- 『ヘルプ』モーダル -->
  <div class="modal fade bd-example-modal-xl moji1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        はじめての方はこの画面のまま登録をしましょう。<br>すでに登録したことがある方は右上のログインを押してください。<br>
        <img src="{{url('../images/login02.png')}}" class="img3">
      </div>
    </div>
  </div>
  <!-- 『ヘルプ』モーダルの終わり -->

</div>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="border: double 5px #5c9ee7;">
        <div class="card-header text-center" style="color: #010079;text-shadow: 0 0 5px white;padding: 0.3em 0.5em;background: -webkit-repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);background: repeating-linear-gradient(-45deg, #cce7ff, #cce7ff 3px,#e9f4ff 3px, #e9f4ff 7px);">
          <h2>{{ __('新規会員登録画面') }}</h2>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- 名前入力 -->
            <div class="form-group row">
              <h1 for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</h1>

              <div class="col-md-6">
                <input id="name" size="25" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal3">
                  ヘルプ
                </button>

                <!-- 『名前』モーダル -->
                <div class="modal fade moji1" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">名前を入力してみましょう。</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        自分の名前を入力してみましょう。<br>
                        例）はじめて　太郎
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『名前』モーダル終わり -->

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『名前』入力終わり -->


            <!-- 『メールアドレス』入力 -->
            <div class="form-group row">
              <h1 for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</h1>

              <div class="col-md-6">
                <input id="email" type="email" size="25" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                        自分のメールアドレスを入力しましょう<br>
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
                <input id="password" type="password" size="25" placeholder="６文字以上、半角入力"class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal1">
                  ヘルプ
                </button>


                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <!-- 『パスワード』入力終わり -->

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
                        自分が覚えやすいパスワードを作りましょう。<br>
                        例）hajimete34
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『パスワード』モーダル終わり -->

            <!-- 『パスワード確認』入力 -->
            <div class="form-group row">
              <h1 for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</h1>

              <div class="col-md-6">
                <input id="password-confirm" type="password" size="25" placeholder="６文字以上、半角入力" name="password_confirmation" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal2">
                  ヘルプ
                </button>

                <!-- 『パスワード確認』モーダル -->
                <div class="modal fade moji1" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                        確認用でパスワードをもう一度入れましょう</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        もう一度パスワードを入れよう
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『パスワード確認』モーダル終わり -->

              </div>
            </div>
            <!-- 『パスワード確認』終わり -->


            <!-- 『新規登録する』 -->
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">

                <label for="trigger" class="open_button btn btn-primary text-center btn-lg">{{ __('新規登録する') }}</label>

                <!-- 『新規登録する』モーダル -->
                <div class="modal_wrap moji1">
                  <input id="trigger" type="checkbox">
                  <div class="modal_overlay">
                    <label for="trigger" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger" class="close_button">✖</label>
                      <h2 style="text-align: center;" class="border-bottom">新規登録画面</h2>
                      <h3 style="text-align: center;">
                      打ち込まれた情報をもとに新規登録を行います</h3>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">
                          {{ __('新規登録') }}
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 『新規登録する』モーダル終わり -->

              </div>
            </div>
            <!-- 『新規登録する』終わり -->

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
