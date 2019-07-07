<!DOCTYPE html>
<html>
<head>
  <title>shop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">絶対にサービスを完成させるぞ</h1>
  <div class="container">
<table>
  <tr><th>Name</th><th>Price</th></tr>
  @foreach($products as $product)
  <tr>
  <td>   {{ $product->name }} </td>
  <td>   {{ $product->price}} </td>
  <td> <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細へ</a></td>
  <td> <a href="/products/{{ $product->id }}/delete" class="btn btn-danger my-2">削除</td>
  <td> <img src="/storage/{{ $product->picture_path }}"> </td>
</tr>
  @endforeach
</table>

</body>
</html>