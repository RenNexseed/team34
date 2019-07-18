@extends('layouts.app')
@section('title')
届け先
@endsection
@section('content')

</head>

<h1 class="text-center mt-5">カートの中身
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    ヒント
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl moji1" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">カートについて</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        カートとはわかりやすくいうと買い物カゴのことです。<br>普段のお買い物で買い物かごを使うことがあると思います。ネットショッピングでのカートとは買い物かごあと思ってください。<br>このページでは実際にどの商品が入っているかを確認できます。
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>
</h1>
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
    <?php $total = 0; ?>
    @foreach($orders as $order)
    
    <?php $total += $order->product->price * $order->amount ?>
    
    <tr style="font-size: 25px">
      <td class="align-middle"> {{ $order->product->name }} </td>
      <td> <img src="../{{ $order->product->picture_path }}" style="width: 150px; height: auto;"> </td>
      <td class="align-middle"> {{ $order->product->price }}</td>
      <td class="align-middle"><a href="{{ route('order.decr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-minus btn btn-outline-dark">-</a> {{ $order->amount }} <a href="{{ route('order.incr', ['id' => $order->id, 'amount' => $order->amount ]) }}" class="quantity-plus btn btn-outline-dark">+</a></td>
      <td class="align-middle"> 
      <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
削除
</button>

<!-- Modal -->
<div class="modal fade moji1" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">削除ボタン</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        商品がいらなかった場合にカートから削除するボタンです。
        <a href="/orders/{{ $order->id }}/delete" class="btn btn-danger my-2">削除をする</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">戻る</button>
      </div>
    </div>
  </div>
</div>
</td>
    </tr>
    @endforeach

    {{ '合計金額は'
    .$total}}
  </table>
  <div class="row">
    
  <div class="modal_wrap mx-auto">
              <input id="trigger" type="checkbox">
                <div class="modal_overlay">
                  <label for="trigger" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger" class="close_button">✖️</label>
                      <h2 style="text-align: center;" class="border-bottom">一覧に戻るボタン</h2>
                      <h3 style="text-align: center;">一覧に戻るボタンです。</h3>
                        <div class="text-center">
                        <a href="/home" class="btn btn-success btn-lg ml-5">商品一覧ページに戻る</a>
                        </div>
                    </div>
                </div>
                  <label for="trigger" class="col-sm-7 btn open_button btn-primary">戻る</label>
            </div>
      <div class="modal_wrap mx-auto">
          <input id="trigger1" type="checkbox">
              <div class="modal_overlay">
                <label for="trigger1" class="modal_trigger border-success"></label>
                  <div class="modal_content rounded">
                    <label for="trigger1" class="close_button">✖️</label>
                    <h2 style="text-align: center;" class="border-bottom">購入確認画面に行くボタン。</h2>
                    <h3 style="text-align: center;">続いてはお届け先の確認ページに行きます。<br>ここでは実際に住所を入れてみましょう。こちらはデモなので実際には届かないのでご安心ください。</h3>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">購入確認ページへ</button>
                      </div>
                  </div>
              </div>
            <label for="trigger1" class="col-sm-7 open_button btn btn-primary">購入確認ページ</label>
        </div>
      </div>
  </form>
</div>


@endsection

