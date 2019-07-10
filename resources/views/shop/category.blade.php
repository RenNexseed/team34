<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    @yield('style')
</head>
<body>
    <span class="menu-toggle"><i class="blogicon-reorder lg"></i>カテゴリー</span>
    <ul id='menu'>
        <li>男性服
            <ul>
                <li><a href="{{ url('showCategory') }}">Tシャツ</a></li>
                <li><a href="{{ url('showCategory') }}">アウター</a></li>
                <li><a href="{{ url('showCategory') }}">シャツ</a></li>
                <li><a href="{{ url('showCategory') }}">ジャケット</a></li>
                <li><a href="{{ url('showCategory') }}">ズボン</a></li>
            </ul>
        </li>
        <li>女性服
            <ul>
                <li><a href="{{ url('showCategory') }}">Tシャツ</a></li>
                <li><a href="{{ url('showCategory') }}">ワンピース</a></li>
                <li><a href="{{ url('showCategory') }}">スカート</a></li>
                <li><a href="{{ url('showCategory') }}">ニット</a></li>
                <li><a href="{{ url('showCategory') }}">ジーンズ</a></li>
            </ul>
        </li>
    </ul>
     @yield('category')
     
    <!-- <style type="text/css">
    #top-editarea{
     background: #dcdcdc;/*外側の背景*/
     text-align: right;/*MENUの文字の位置*/
    }
    #top-editarea .section{
     margin: 0;
     width: 100%;
    }
    .menu-toggle{
     color: #444444;/*MENUの文字色*/
     display: inline-block;
     padding: 5px;
    }
    #menu {
     display: none;
     padding: 0;
     margin: 0;
    }
    #menu li{
     list-style-type: none;
     background: #f5f5f5;/*リストの背景色*/
     margin: 0 auto;
    }
    #menu li a {
     color: #444444;/*リストの文字色*/
     font-weight: bold;
     display: block;
     padding: 7px;
     text-align: left;/*リストの文字の位置*/
    }
    </style> -->
     

</body>
</html>