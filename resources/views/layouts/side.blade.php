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
<div id="outer" class="navbar-fixed-left">
    <div id="left" class="sticky">
    <div class="left-title text-center" style="background-color: #66FFFF;font-size: 22px">カテゴリー</div>
    <div class="link">
    <ul id='menu'>
                <li>男性服
                    <ul>

                        <li><a href="{{ route('find', ['category' => 'mensTシャツ']) }}">Tシャツ</a></li>
                        <li><a href="{{ route('find', ['category' => 'アウター']) }}">アウター</a></li>
                        <li><a href="{{ route('find', ['category' => 'シャツ']) }}">シャツ</a></li>
                        <li><a href="{{ route('find', ['category' => 'ジャケット']) }}">ジャケット</a></li>
                        <li><a href="{{ route('find', ['category' => 'ズボン']) }}">ズボン</a></li>

                    </ul>
                </li>
                <li>女性服
                    <ul>
                        <li><a href="{{ route('find', ['category' => 'ladysTシャツ']) }}">Tシャツ</a></li>
                        <li><a href="{{ route('find', ['category' => 'ワンピース']) }}">ワンピース</a></li>
                        <li><a href="{{ route('find', ['category' => 'スカート']) }}">スカート</a></li>
                        <li><a href="{{ route('find', ['category' => 'ニット']) }}">ニット</a></li>
                        <li><a href="{{ route('find', ['category' => 'ジーンズ']) }}">ジーンズ</a></li>

                    </ul>
                </li>
            </ul>
    </div>
    </div>
    @yield('sidebar')
</div>

</body>
</html>
