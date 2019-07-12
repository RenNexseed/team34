<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'はじめてのネットショッピング') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/ajaxzip3.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">

     <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $(function(){
        $(".menu-toggle").on("click", function() {
            $(this).next().slideToggle();
        });
    });
    </script>
    <script src="{{ asset('js/category.js') }}" defer></script>
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
</head>
<body>

<!-- ヘッダー -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img alt="logo" src="storage/images/logo4.png" class="mr-5">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="category">

<!-- トグルメニュー -->
        <span class="menu-toggle"><i class="blogicon-reorder lg"></i>カテゴリー</span>
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
         @yield('category')
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- フッター -->
    <footer>
        <div class="footerv2-w3ls">
            <div class="container-fluid py-5 footer-copy_w3ls">
                <div class="d-lg-flex justify-content-between">
                    <div class="mt-2 sub-some align-self-lg-center">
                        
                    </div>
                    <div class="cpy-right align-self-center">
                        <h2 class="agile_btxt">
                                <span>は</span>じめての
                                <span>ネ</span>ットショッピング
                        </h2>
                        <p>© 2018 Fashion Hub. All rights reserved | Design by
                            <a href="http://w3layouts.com" class="text-secondary"> W3layouts.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @yield('footer')
    </footer>
</body>
</html>
