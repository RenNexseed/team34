@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

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
        <td> {{ $order->amount }}</td>
        <td> <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除 </td>
        </tr>
        @endforeach
      </table>
@endsection