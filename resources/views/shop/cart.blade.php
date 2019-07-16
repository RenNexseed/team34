<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table class="table col-12 table-hover table-info table-bordered">
      <caption>購入履歴</caption>
      <tr>
        <th>名前</th>
        <th>写真</th>
        <th>値段</th>
        <th>個数</th>
        <th>削除</th>
      </tr>
  @foreach($carts as $cart)
  <tr>
  <td> {{ $cart->product->name }} </td>
  <td> <img src="storage/{{ $cart->product->picture_path }}" style="width: 300px; height: auto;"> </td>
  <td> {{ $cart->product->price }} </td>
  <td> {{ $cart->amount }} </td>
  <td> {{ $cart->id }} </td>
</tr>

  @endforeach

</body>
</html>