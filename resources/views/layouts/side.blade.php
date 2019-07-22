<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>wwwwwww</title> -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/top.css') }}" rel="stylesheet"> -->
    <link href="/css/top.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/side.css">
</head>
<body>

<div  id="left" class="navbar-fixed-left" style="margin-top: 60px">
    <div id="left" class="sticky">

                    <ul class="sample1">
                <div class="moji1">男性服</div>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'mensTシャツ']) }}" style="color: #000000">Tシャツ</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'アウター']) }}" style="color: #000000">アウター</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'シャツ']) }}" style="color: #000000">シャツ</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ジャケット']) }}" style="color: #000000">ジャケット</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ズボン']) }}" style="color: #000000">ズボン</a></li>
                <div class="moji1">女性服</div>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ladysTシャツ']) }}" style="color: #000000">Tシャツ</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ワンピース']) }}" style="color: #000000">ワンピース</a></li>
                        <li><a href="{{  action('CategoriesController@show', ['category' => 'スカート']) }}" style="color: #000000">スカート</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ニット']) }}" style="color: #000000">ニット</a></li>
                        <li><a href="{{ action('CategoriesController@show', ['category' => 'ジーンズ']) }}" style="color: #000000">ジーンズ</a></li>

                    </ul>
    </div>
    @yield('sidebar')

</div>
</div>

</body>
</html>
