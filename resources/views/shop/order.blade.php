@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

   <h2>このカートの中には{{ $orders->count() }}個商品があります。</h2>
   <form action="store-cart" method="post">
    @csrf

   <table class="table col-12 table-hover table-info table-bordered">
      <caption>カートの中身</caption>
      <tr>
        <th>名前</th>
        <th>写真</th>
        <th>値段</th>
        <th>個数</th>
        <th>削除</th>
      </tr>
      @foreach($orders as $order)
      <tr>
        <td> {{ $order->product->name }} </td>
        <td> <img src="storage/{{ $order->product->picture_path }}" style="width: 300px; height: auto;"> </td>
        <td> {{ $order->product->price }}</td>
        <td><a href="{{ route('order.decr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-minus">-</a> {{ $order->amount }} <a href="{{ route('order.incr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-plus">+</a></td>
        
        
        <td> <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除 </a></td>
        </tr>
        @endforeach
      </table>
      <input type= submit value="購入確定ページへ飛ぶ">
</form>

@endsection