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
      <div class="card">
        <div class="card-header">{{ __('ログイン') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Eメールアドレス') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" size="25" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal">
                  ヘルプ
                </button>

                <!-- Modal -->
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

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" size="25" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal1">
                  ヘルプ
                </button>

                <!-- Modal -->
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

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

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

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <!-- モーデル -->
                <div class="modal_wrap moji1">
                  <input id="trigger" type="checkbox">
                  <div class="modal_overlay">
                    <label for="trigger" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger" class="close_button">✖️</label>
                      <h2 style="text-align: center;" class="border-bottom">ログイン画面</h2>
                      <h3 style="text-align: center;">入力が出来たら、実際にログインしてみましょう。</h3>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          {{ __('ログインする') }}
                        </button>
                      </div>
                    </div>
                  </div>
                  <label for="trigger" class="open_button btn btn-primary text-center btn-lg">{{ __('ログインする') }}</label>
                </div>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('パスワードをお忘れですか？') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
