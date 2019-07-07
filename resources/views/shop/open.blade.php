<!DOCTYPE html>
<html>
<head>
  <title>詳細ページ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">商品紹介詳細ページ</h1>
  <!-- <form action="/store-orders" method="POST"> -->

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color: black;
  background-image: url(../storage/images/backimg02.jpg);
}

input{ 
  height: 40px;
}

h1{
  font-size: 80px;
  font-family: 'Hiragino Kaku Gothic Pro','ヒラギノ角ゴ Pro W3','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
}


</style>

  <div class="container">
    <div class="card mb-3 border border-primary" style="width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="/storage/{{ $product->picture_path }}" class="card-img m-5" alt="..." style="vertical-align:middle; display:inline-block;">
        </div>
        <div class="col-md-7">
          <div class="card-body m-5" style="vertical-align:middle; display:inline-block;">
            <h2 class="card-title">名前：{{ $product->name}}</h2>
            <hr>
            <h3 class="card-text">価格：¥ {{ $product->price}}</h3>
            <hr>
            <h3 class="card-text">詳細説明：{{ $product->description}}</h3>
            <hr>
            <form action="/store-orders" method="POST">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="product_id">
              <div class="form-group">
                <div class="row">
                <h3 for="exampleFormControlSelect1" class="ml-3">個数：</h3>
                <select class="form-control" id="" name="amount" style="width: 15%">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <h3 for="exampleFormControlSelect1"> 個</h3>
              </div>
            <hr>
              <div class="row">
              <button type="submit" class="btn btn-primary ml-3">カートに入れる</button>

            </form>

            <a href="/home" class="btn btn-success ml-5">メインページに戻る</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </body>
  </html>