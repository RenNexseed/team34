@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

  <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">お問い合わせ</h1>
        </div>
        <div class="panel-body well well-lg text-center mt-5">
            <div>これで終了です！<br>おめでとうございます！<br>下のボタンで復習できます</div>
              <div>{{ Auth::user()->email }}にメールを送信しました。</div>
        </div>
        <div class="panel-body well well-lg text-center mt-5">
            <a href="{{ url('home') }}"  class="btn btn-primary btn-lg">一覧に戻る</a>
        </div>
    </div>
</body>
</html>
@endsection