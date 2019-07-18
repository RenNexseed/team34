@extends('layouts.app')

@section('content')

<h1 class="mt-5 midashi moji1">最終確認画面</h1>
<form class="form-inline mx-auto mt-5 moji1" action="{{ route('check.thanks')}}" method="post">
  @csrf
  <div class="form-group row mx-auto container">
    <label for="name" class="form-controll col-sm-5" id="name">お名前</label>
      <div class="col-sm-7">
        {{ $hoge['name'] }}
      </div>
  </div>
<div class="form-group row mx-auto container mt-5">
  <label for="inputEmail3" class="col-sm-5 col-form-label">メールアドレス</label>
  <div class="col-sm-7">
    {{ $hoge['mail'] }}
  </div>
</div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputZip" class="col-sm-5 col-form-label">郵便番号</label>
      <div class="col-sm-7">
        {{ $hoge['zip01'] }}
      </div>
  </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputState" class="col-sm-5 col-form-label">都道府県</label>
      <div class="col-sm-7">
        {{ $hoge['pref01'] }}
      </div>
  </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputCity" class="col-sm-5 col-form-label">市区町村</label>
      <div class="col-sm-7">
        {{ $hoge['addr01'] }}
      </div>
  </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputAddress" class="col-sm-5 col-form-label">町名・番地</label>
      <div class="col-sm-7">
    {{ $hoge['addr0'] }}
      </div>
</div>
<div class="form-group row mx-auto container mt-5">
  <label for="inputAddress2" class="col-sm-5 col-form-label">ビル、マンション名</label>
    <div class="col-sm-7">
      {{ $hoge['build'] }}
    </div>
</div>
<div class="modal_wrap container mx-auto">
  <input id="trigger" type="checkbox">
    <div class="modal_overlay moji1">
      <label for="trigger" class="modal_trigger"></label>
        <div class="modal_content">
          <label for="trigger" class="close_button">✖️</label>
            <h2>おめでとうございます！</h2>
              <h3>以上でネットショッピングのデモは終了致します。<br>確定を押すとメールが届きます。<br>戻るボタンで前にも戻れます。</h3>
              <div class="form-group container row mt-5">
                <div class="mx-auto">
                  <button type="button" class="btn btn-primary" onclick=history.back()>戻る</button>
                  <button type="submit" class="btn btn-primary" href="{{ route('check.thanks') }}">確定する</button>
                </div>
              </div>
        </div>
    </div>
    <label for="trigger" class="open_button btn btn-primary mt-5" style="margin: auto;">メールを送信する</label>
</div>

</form>
@endsection