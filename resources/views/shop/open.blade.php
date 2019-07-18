  @extends('layouts.app')  <!-- layouts.appを呼び出している -->
  @section('style')  <!-- styleを呼び出している -->
  @endsection

  <!-- <form action="/store-orders" method="POST"> -->

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color: black;
  /*background-image: url(../storage/images/backimage03.jpg);*/
}

input{ 
  height: 40px;
}

h1{
  font-size: 80px;
  font-family: 'Hiragino Kaku Gothic Pro','ヒラギノ角ゴ Pro W3','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
  color: #6cb4e4;
  text-align: center;
  padding: 0.25em;
  border-top: solid 2px #6cb4e4;
  border-bottom: solid 2px #6cb4e4;
  background: -webkit-repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
  background: repeating-linear-gradient(-45deg, #f0f8ff, #f0f8ff 3px,#e9f4ff 3px, #e9f4ff 7px);
}

.accessory {
  height: 6px;
  background-image: radial-gradient(
    closest-side,
    hsla(0, 0%, 50%, 1.0),
    hsla(0, 0%, 50%, 0) 100%);
  position: relative;
}
.accessory:after {
  position: absolute;
  top:  50%;
  left: 50%;
  display:block;
  background-color: hsl(0, 0%, 75%);
  height: 12px;
  width:  12px;
  transform: rotate(45deg);
  margin-top:  -10px;
  margin-left: -10px;
  border-radius: 4px 0;
  border: 4px solid hsla(0, 0%, 100%, 0.35);
  background-clip: padding-box;
  box-shadow: -10px 10px 0 hsla(0, 0%, 100%, 0.15), 10px -10px 0 hsla(0, 0%, 100%, 0.15);
}


hr {
    height:30px;
    border-style:solid;
    border-color:black;
    border-width:1px 0 0 0;
    border-radius:20px;
}
hr:before {
    display:block;
    content:"";
    height:30px;
    margin-top:-31px;
    border-style:solid;
    border-color:black;
    border-width:0 0 1px 0;
    border-radius:5px;
}



</style>

@section('content')
  <h1 class="text-center">商品紹介詳細ページ</h1>
  <div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    ヒント
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">商品の詳細ページ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        このページは先ほど選んだ商品を実際にカートにいれたり料金を確認できたり、個数を変えれるページです。<br>
        もしわからなければ答えのボタンを押してみましょう。
        <img src="{{url('../images/kensaku.jpg')}}" class="img2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <div class="card mb-3" style="width: 100%; border: double 5px #4ec4d3;">
      <div class="row no-gutters">
        <div class="col-md-5">
          <img src="../{{ $product->picture_path }}" class="card-img m-5" alt="..." style="vertical-align:middle; display:inline-block;">
        </div>
        <div class="col-md-7">
          <div class="card-body m-5" style="vertical-align:middle; display:inline-block;">
            <h2 class="card-title"><span style="font-weight: 700;">名前：</span>{{ $product->name}}</h2>
            <hr class="accessory">
            <h3 class="card-text"><span style="font-weight: 700;">価格：</span>¥ {{ $product->price}}</h3>
            <hr class="accessory">
            <h3 class="card-text"><span style="font-weight: 700;">詳細説明：</span>{{ $product->description}}</h3>
            <hr class="accessory">
            <form action="/store-orders" method="POST">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="product_id">
              <div class="form-group">
                <div class="row">
                <h3 for="exampleFormControlSelect1" class="ml-3" style="font-weight: 700;">個数：</h3>
                <select class="form-control" id="" name="amount" style="width: 15%">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <h3 for="exampleFormControlSelect1" class="ml-3">個</h3>
              </div>
            </div>
            <hr class="accessory">
            <div class="container">
            <div class="modal_wrap">
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
                  <label for="trigger" class="col-sm-7 open_button btn btn-primary">戻る</label>
            </div>
            <div class="modal_wrap">
              <input id="trigger1" type="checkbox">
                <div class="modal_overlay">
                  <label for="trigger1" class="modal_trigger border-success"></label>
                    <div class="modal_content rounded">
                      <label for="trigger1" class="close_button">✖️</label>
                      <h2 style="text-align: center;" class="border-bottom">カートに入れるボタン</h2>
                      <h3 style="text-align: center;">続いてはカートのページに移ります。次のページでは何がカートに入っているかを確認できます。</h3>
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-lg ml-3">カートに入れる</button>
                        </div>
                    </div>
                </div>
              <label for="trigger1" class="col-sm-7 open_button btn btn-primary">カートに入れる</label>
            </div>
            </div>
          </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>

@endsection