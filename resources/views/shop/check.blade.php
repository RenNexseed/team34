@extends('layouts.app')

@section('content')
<div class="bg-img_2 moji1">
  <h1 class="mx-auto mt-5 midashi">お届け先住所</h1>
  <form class="form-inline mt-5 moji1" action="{{ route('check.confirm')}}" method="post">
    @csrf
    <div class="form-group row mx-auto container">
      <label for="name" class="form-controll col-sm-5" id="name">お名前</label>

        <div class="col-sm-7">
         {{ Auth::user()->name }}
        </div>
    </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputEmail3" class="col-sm-5 col-form-label">メールアドレス</label>
    <div class="col-sm-7">
      {{ Auth::user()->email }}

    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputZip" class="col-sm-5 col-form-label">郵便番号</label>
      <div class="col-sm-7">
        <input type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" value="{{ old('zip01') }}" class="form-control form-control{{ $errors->has('zip01') ? ' is-invalid' : '' }}" required integer autofocus>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          ヒント
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">郵便番号を入れてみましょう。</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                郵便番号を入れると市区町村まで自動入力されます。<br>
                例）1234567
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
              </div>
            </div>
          </div>
        </div>
        @if ($errors->has('zip01'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('zip01') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputState" class="col-sm-5 col-form-label">都道府県</label>
      <div class="col-sm-7">
        <input type="text" name="pref01" size="20" value="{{ old('pref01') }}" class="form-control form-control{{ $errors->has('pref01') ? ' is-invalid' : '' }}" required autofocus>
        @if ($errors->has('pref01'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('pref01') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputCity" class="col-sm-5 col-form-label">市区町村</label>
      <div class="col-sm-7">
        <input type="text" name="addr01" size="60" value="{{ old('addr01') }}" class="form-control form-control{{ $errors->has('addr01') ? ' is-invalid' : '' }}" required autofocus>
        @if ($errors->has('addr01'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('addr01') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputAddress" class="col-sm-5 col-form-label">町名・番地</label>
      <div class="col-sm-7">
        <input type="text" class="form-control {{ $errors->has('addr0') ? ' is-invalid' : '' }}" required autofocus id="inputAddress"name="addr0" size="40" value="{{ old('addr0') }}">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
          ヒント
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">町名、番地を入れてみましょう。</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                例）1−2−34
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
              </div>
            </div>
          </div>
        </div>
        @if ($errors->has('addr0'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('addr0') }}</strong>
        </span>
        @endif
      </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputAddress2" class="col-sm-5 col-form-label">ビル、マンション名</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="inputAddress2" name="build" value="{{ old('build') }}">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
          ヒント
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ビル、マンション名を入れてみましょう。</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                例）はじめてビル
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row container mt-5 mx-auto">
      <div class="form-check cp_ipcheck col-sm-5">
        <label class="form-check-label" for="gridCheck">
          <input class="option-input02 checkbox form-control{{ $errors->has('check') ? ' is-invalid' : '' }}" required autofocus type="checkbox" id="gridCheck" name="check">
          @if ($errors->has('check'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('check') }}</strong>
          </span>
          @endif
          確認ボタン
        </label>
      </div>
      <!-- モーダル -->
      <div class="modal_wrap">
        <input id="trigger" type="checkbox">

        <div class="modal_overlay moji1">
          <label for="trigger" class="modal_trigger border-success"></label>
          <div class="modal_content rounded">
            <label for="trigger" class="close_button">✖️</label>
            <h2 style="text-align: center;" class="border-bottom">入力お疲れ様です！</h2>
            <h3 style="text-align: center;">続いてはお届け先の確認ページに行きます。<br>こちらはデモなので実際の取引などはないのでご安心ください。</h3>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">購入確認ページへ</button>
            </div>
          </div>
        </div>
        <label for="trigger" class="open_button btn btn-primary">購入確認ページへ</label>
      </div>
    </div>
  </form>
</div>

@endsection