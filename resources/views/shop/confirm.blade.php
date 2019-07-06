@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <div><h1>お届け先</h1></div>
  <div><h2>住所</h2></div>
  <form class="form-inline" action="{{ route('check.thanks')}}" method="post">
    @csrf
    <div class="form-group row">
      <label for="text4c" class="col-sm-5 col-form-label">お名前</label>
        <div class="col-sm-7">
          {{ $hoge['name'] }}
        </div>
    </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-5 col-form-label">メールアドレス</label>
    <div class="col-sm-7">
      {{ $hoge['mail'] }}
    </div>
  </div>
    <div class="form-group col-sm-4 mt-5 form-inline">
      <label for="inputZip">郵便番号</label>
        <div class="col-sm-8">
          {{ $hoge['zip31'] }} - {{ $hoge['zip32'] }}
        </div>
    </div>
    <div class="form-group col-sm-4 col-form-label">
      <label for="inputState">都道府県</label>
        <div class="col-sm-8">
          {{ $hoge['pref31'] }}
        </div>
    </div>
    <div class="form-group">
      <label for="inputCity" class="col-sm-4 col-form-label">市区町村</label>
        <div class="col-sm-8">
          {{ $hoge['addr31'] }}
        </div>
    </div>
    <div class="form-group col-sm-4 col-form-label">
      <label for="inputAddress">町名・番地</label>
        <div class="col-sm-8">
      {{ $hoge['addr01'] }}
        </div>
  </div>
  <div class="form-group col-sm-4 col-form-label">
    <label for="inputAddress2">ビル、マンション名</label>
      <div class="col-sm-8">
        {{ $hoge['build'] }}
      </div>
  </div>
  <button type="submit" class="btn btn-primary" href="{{ route('check.thanks') }}">確定する</button>
</form>
<button type="button" onclick=history.back()>戻る</button>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection