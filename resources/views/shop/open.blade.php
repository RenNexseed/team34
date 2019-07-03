<!DOCTYPE html>
<html>
<head>
  <title>詳細ページ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1>このページは詳細ページ(商品紹介ページだよん)</h1>
  <form action="/store-orders" method="POST">
    {{ $product->name}}
  <h1>{{ $product->description }}</h1>
  
  
  <h2><img src="/storage/{{ $product->picture_path }}"></h2>

  <button type="submit">カートに入れる</button>

</form>


</body>
</html>