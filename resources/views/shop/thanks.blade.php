@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')

  <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">お問い合わせ</h1>
        </div>
        <div class="panel-body">
            <div class="well well-lg text-center">お問い合わせありがとうございました</div>
        </div>
    </div>
        <a href="{{ url('home') }}">一覧に戻る</a>
@endsection