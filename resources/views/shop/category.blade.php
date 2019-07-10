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
                @foreach($categories as $category)
                    @if($category -> category_type == 1)
                    <li><a href="{{ route('showCategory', ['id' => $category->category_id]) }}">{{ $category -> category_name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li>女性服
            <ul>
                @foreach($categories as $category)
                    @if($category -> category_type == 2)
                    <li><a href="{{ route('showCategory', ['id' => $category->category_id]) }}">{{ $category -> category_name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
     @yield('category')
     
    
</body>
</html>