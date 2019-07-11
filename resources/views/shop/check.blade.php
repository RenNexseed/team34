@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
  <h1 class="mx-auto mt-5">お届け先住所</h1>
  <form class="form-inline mt-5" action="{{ route('check.confirm')}}" method="post">
    @csrf
    <div class="form-group row mx-auto container">
      <label for="name" class="form-controll col-sm-5" id="name">お名前</label>
        <div class="col-sm-7">
          <input type="text" class="form-control form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="text4c" name="name" value="{{ Auth::user()->name }}" required autofocus>
          @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
        </div>
    </div>
  <div class="form-group row mx-auto container mt-5">
    <label for="inputEmail3" class="col-sm-5 col-form-label">メールアドレス</label>
    <div class="col-sm-7">
      <input type="email" class="form-control form-control{{ $errors->has('mail') ? ' is-invalid' : '' }}" id="inputEmail3" name="mail" value="{{ Auth::user()->email }}" required autofocus>
      @if ($errors->has('mail'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mail') }}</strong>
                                    </span>
                                @endif
    </div>
  </div>
    <div class="form-group row mx-auto container mt-5">
      <label for="inputZip" class="col-sm-5 col-form-label">郵便番号</label>
        <div class="col-sm-7">
          <input type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" value="{{ old('zip01') }}" class="form-control form-control{{ $errors->has('zip01') ? ' is-invalid' : '' }}" required integer autofocus>
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
      <input type="text" class="form-control{{ $errors->has('addr0') ? ' is-invalid' : '' }}" required autofocus id="inputAddress"name="addr0" size="60" value="{{ old('addr0') }}">
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
      </div>
  </div>
  <div class="form-group row container mt-5">
    <div class="form-check mx-auto">
      <input class="form-check-input mx-auto form-control{{ $errors->has('check') ? ' is-invalid' : '' }}" required autofocus type="checkbox" id="gridCheck" name="check">
      @if ($errors->has('check'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('check') }}</strong>
                                    </span>
                                @endif
        <label class="form-check-label" for="gridCheck">
          確認ボタン
        </label>
    </div>
  <button type="submit" class="btn btn-primary" href="{{ route('check.confirm') }}">購入確認ページへ</button>
  </div>
</form>

@endsection