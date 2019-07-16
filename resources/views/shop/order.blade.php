@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<h1 class="text-center">カートの中身</h1>
<div class="container">
 <h2 class="text-center">このカートの中には合計{{ $orders->count() }}個商品があります。</h2>
 <form action="store-cart" method="post">
  @csrf
  <table class="table col-12 table-hover table-active table-bordered text-center mx-auto" >
    <tr style="background-color: black;color:white;font-size: 30px">
      <th>名前</th>
      <th>写真</th>
      <th>値段</th>
      <th>個数</th>
      <th>削除</th>
    </tr>
    @foreach($orders as $order)
    <tr style="font-size: 25px">
      <td class="align-middle"> {{ $order->product->name }} </td>
      <td> <img src="storage/{{ $order->product->picture_path }}" style="width: 150px; height: auto;"> </td>
      <td class="align-middle"> {{ $order->product->price }}</td>
      <td class="align-middle"><a href="{{ route('order.decr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-minus btn btn-outline-dark">-</a> {{ $order->amount }} <a href="{{ route('order.incr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-plus btn btn-outline-dark">+</a></td>
      
      
      <td class="align-middle"> <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除 </a></td>
    </tr>
    @endforeach
  </table>
  <div class="row">
    <input type= submit class="btn btn-info btn-lg mx-auto" value="購入確定ページへ">
  </form>
  <a href="/home" class="btn btn-success btn-lg mx-auto">商品一覧ページに戻る</a>
</div>
</div>


@endsection

