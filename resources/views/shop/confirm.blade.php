@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')

  <div><h1>お届け先</h1></div>
  <div><h2>住所</h2></div>
  <form class="form-inline" action="{{ route('check.thanks')}}" method="post">
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
  <div class="form-group container row mt-5">
    <div class="mx-auto">
  <button type="button" class="btn btn-primary" onclick=history.back()>戻る</button>
    </div>
    <div class="mx-auto">
  <button type="submit" class="btn btn-primary" href="{{ route('check.thanks') }}">確定する</button>
</div>
  </div>
</form>
@endsection