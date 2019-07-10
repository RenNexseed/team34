@extends('layouts.app')
@extends('shop.category')
@section('title')
@endsection

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color:black;
  background-image: url(storage/images/backimg02.jpg);
}

input{ 
  height: 40px;
}

h1{
  font-size: 80px;
  font-family: 'Hiragino Kaku Gothic Pro','ヒラギノ角ゴ Pro W3','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
}


</style>


@section('content')
  <h1 class="text-center">商品一覧</h1>
  <div class="container">

    <form action="/product/find" method="post">
      @csrf
      <input type="text" name="find" style="width: 30%">
      <input type="submit" value="検索" style="width: 10%">

    </form>


      <div class="menu-items row text-center">

      <?php foreach ($products as $product): ?>
        <div class="card col-4">
          <img src="storage/{{ $product->picture_path }}" class="menu-item-image img-responsive" style="height:300px;">
          <div class="card-body">
            <h2 class="menu-item-name">{{ $product->name }}</h2>
          </div> 
          <ul class="list-group list-group-flush">
                  <li class="list-group-item price">¥{{ $product->price}}</li>
                  <li class="list-group-item">
                    <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細をチェック</a>
                  </li>
                </ul>
              </div>
            <?php endforeach ?>
          </div>

@endsection
@section('style')
@endsection