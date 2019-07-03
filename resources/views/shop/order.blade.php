<!DOCTYPE html>
<html>
<head>
  <title>ordercart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">カートの中身を表示</h1>
  <div class="container">

    <table class="table col-12 table-hover table-info table-bordered">
            <tr>
                <th>商品名</th>
                <th>写真</th>
                <th>値段</th>
                <th>数</th>
                <th>削除</th>
            </tr>

            @foreach($products as $product)
            <tr>
                <td>   {{ $product->name }} </td>
                <td>   {{ $product->picture_path}} </td>
                <td>   {{ $product->price}} </td>
                <td>   {{ $product->category}} </td>
                <td>   {{ $product->description}} </td>
            </tr>
            @endforeach
    </table>

</body>
</html>