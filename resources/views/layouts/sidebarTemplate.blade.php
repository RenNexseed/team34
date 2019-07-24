@extends('shop.home')
@section('style2')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/top.css') }}" rel="stylesheet"> -->
    <link href="/css/top.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/side.css">
@section('contentList')

  <div  id="left" class="navbar-fixed-left" style="margin-top: 60px">
    <div id="left" class="sticky">
      <ul class="sample1" style="font-size: 30px">
        男性服
          <li><a href="{{ action('CategoriesController@show', ['category' => 'mensTシャツ']) }}">Tシャツ</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'アウター']) }}">アウター</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'シャツ']) }}">シャツ</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ジャケット']) }}">ジャケット</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ズボン']) }}">ズボン</a></li>
        女性服
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ladysTシャツ']) }}">Tシャツ</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ワンピース']) }}">ワンピース</a></li>
          <li><a href="{{  action('CategoriesController@show', ['category' => 'スカート']) }}">スカート</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ニット']) }}">ニット</a></li>
          <li><a href="{{ action('CategoriesController@show', ['category' => 'ジーンズ']) }}">ジーンズ</a></li>
      </ul>
    </div>
@endsection