@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <div><h1>お届け先</h1></div>
  <div><h2>住所</h2></div>
  @if($errors->any())
   <ul>
       @foreach($errors->all() as $message)
            <li class="alert alert-danger">{{ $message }}</li>
       @endforeach
   </ul>
@endif
  <form class="form-inline" action="{{ route('check.confirm')}}" method="post">
    @csrf
    <div class="form-group row mx-auto container">
      <label for="name" class="form-controll col-sm-5" id="name">お名前</label>
        <div class="col-sm-7">
          <input type="text" class="form-control" id="text4c" name="name" value="{{ old('name') }}">
        </div>
    </div>
    <br>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputEmail3" class="col-sm-5 col-form-label">メールアドレス</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="inputEmail3" name="mail" value="{{ old('mail') }}">
    </div>
  </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputZip" class="col-sm-5 col-form-label">郵便番号</label>
        <div class="col-sm-7">
          <input type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" value="{{ old('zip01') }}">
        </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputState" class="col-sm-5 col-form-label">都道府県</label>
        <div class="col-sm-7">
          <input type="text" name="pref01" size="20">
        </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputCity" class="col-sm-5 col-form-label">市区町村</label>
        <div class="col-sm-7">
          <input type="text" name="addr01" size="60">
        </div>
    </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputAddress" class="col-sm-5 col-form-label">町名・番地</label>
        <div class="col-sm-7">
      <input type="text" class="form-control" id="inputAddress"name="addr01" size="60">
        </div>
  </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputAddress2" class="col-sm-5 col-form-label">ビル、マンション名</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="inputAddress2" name="build">
      </div>
  </div>
  <div class="form-group row container mt-5">
    <div class="form-check mx-auto">
      <input class="form-check-input mx-auto" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          確認ボタン
        </label>
    </div>
  <button type="submit" class="btn btn-primary" href="{{ route('check.confirm') }}">購入確認ページへ</button>
  </div>
</form>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection