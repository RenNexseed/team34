@extends('layouts.app')  <!-- layouts.appを呼び出している -->
@section('style')  <!-- styleを呼び出している -->
@endsection

<style>
  body {
  font-family: Lato, 'Hiragino Kaku Gothic Pro', sans-serif;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  font-size: 30px;
  letter-spacing: 0.05em;
  color:black;
  /*background-image: url(storage/images/backimg02.jpg);*/
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

}


</style>



@section('content')
  <h1 class="text-center">商品検索画面</h1>
  @include('layouts.side')
  <div class="container">

    <form action="{{ 'find' }}" method="post">  <!-- formのactionの中身がhome.bladeとは違うので注意 -->
      @csrf
      <input type="text" name="name" style="width: 30%">
      <input type="submit" value="検索" style="width: 10%">

    </form>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    ヒント
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl moji1" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">「詳細をチェックボタン」を押してみよう</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        「詳細をチェックボタン」を押してみよう

        <img src="{{url('../images/shosai.jpg')}}" class="img3">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
  戻る
</button>

<!-- Modal -->
<div class="modal fade moji1" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">一覧画面に戻る</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        一覧画面に戻るボタンです<br><a href="/home" class="btn btn-primary mt-3">商品一覧ページに戻る</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>
      <h4 class="text-left mt-3">合計{{ $products->count() }}件の検索結果が見つかりました</h4>
    

      <div class="menu-items row text-center">

      <?php foreach ($products as $product): ?>
        <div class="card col-4" style="border: double 5px #4ec4d3;">
          <div class="img_wrap"><!-- ホバーを追加 -->
          <img src="../{{ $product->picture_path }}" class="menu-item-image img-responsive" style="height:250px;">  <!-- ディレクトリ構造の違いによりimgのパスがhomeと違うので注意 -->
        </div>
          <div class="card-body">
            <h2 class="menu-item-name" style="background: linear-gradient(transparent 70%, #a7d6ff 70%);">{{ $product->name }}</h2>
          </div>
          <ul class="list-group list-group-flush">
                  <li class="list-group-item price" style="font-size: 24px">¥{{ $product->price}}</li>
                  <li class="list-group-item">
                   <div class="modal_wrap">
        <input id="trigger" type="checkbox">
            <div class="modal_overlay">
              <label for="trigger" class="modal_trigger border-success"></label>
                <div class="modal_content rounded">
                  <label for="trigger" class="close_button">✖️</label>
                  <h2 style="text-align: center;" class="border-bottom">今から商品の詳細ページに移ります</h2>
                  <h3 style="text-align: center;">下にある「詳細をチェック」というボタンを押すと商品の詳細ページに移ります！<br>実際に詳細位をみてカートにいれてみましょう！</h3>
                    <div class="text-center">
                      <a href="/home/{{ $product->id }}" class="btn btn-primary">詳細をチェック</a>
                    </div>
                </div>
            </div>
          <label for="trigger" class="btn btn-primary" href="{{ route('check.confirm') }}">詳細をチェック</label>
      </div>
                  </li>
                </ul>
              </div>
            <?php endforeach ?>
          </div>
          <a href="/home" class="btn btn-outline-secondary btn-lg btn-block mt-3">商品一覧ページに戻る</a>
        </div>

         </body>

@section('sidebar')  <!-- その中のsidebarを呼び出す -->
@endsection  <!-- sidebarのendsection -->
@endsection  <!-- contentのendsection -->
