@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規会員登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" size="25" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal3">
                                    ヘルプ
                                    </button>

                                    <!-- Modal -->
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

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" size="25" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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
                                            メールアドレスを入力してみましょう<br>
                                            例）aaaa@aaa.com
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
                                            自分が覚えやすいパスワードを作りましょう。<br>
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" size="25" name="password_confirmation" required>
                                <button type="button" class="btn btn-secondary ml-2" data-toggle="modal" data-target="#exampleModal2">
                                    ヘルプ
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade moji1" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">先ほど入れたパスワードをもう一度入れましょう</h5>
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
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <!-- モーデル -->
                                  <div class="modal_wrap moji1">
                                    <input id="trigger" type="checkbox">
                                        <div class="modal_overlay">
                                          <label for="trigger" class="modal_trigger border-success"></label>
                                            <div class="modal_content rounded">
                                              <label for="trigger" class="close_button">✖️</label>
                                              <h2 style="text-align: center;" class="border-bottom">新規登録画面</h2>
                                              <h3 style="text-align: center;">情報を入力できたら、実際に登録をしてみましょう。</h3>
                                                <div class="text-center">
                                                  <button type="submit" class="btn btn-primary btn-lg">
                                                    {{ __('登録する') }}
                                                  </button>
                                                </div>
                                            </div>
                                        </div>
                                      <label for="trigger" class="open_button btn btn-primary text-center btn-lg">{{ __('登録する') }}</label>
                                  </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
