<!DOCTYPE html>
<html>
<head>
  <title>商品追加ページ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
 <h1 class="text-center">商品追加ページ</h1>
 <form enctype="multipart/form-data" action="/store-products" method="POST">
  @csrf
  <div class="col-md-8">
    <div class="form-group">
      <label for="exampleFormControlInput1">商品名（カテゴリー名も加えて検索に引っかかるようにする）</label>
      <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="例）スタイリッシュTシャツ、完全防寒アウター、花柄ワンピース">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">カテゴリー選択（以下から選択）</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category">

        <option>mensTシャツ</option>
        <option>アウター</option>
        <option>シャツ</option>
        <option>ジャケット</option>
        <option>ズボン</option>
        <option>ladysTシャツ</option>
        <option>ワンピース</option>
        <option>スカート</option>
        <option>ニット</option>
        <option>ジーンズ</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">ファイル選択（必ず画像を正方形にトリミングしてから載せる！）</label>
      <input type="file" class="form-control" id="" placeholder="" name="picture_path">
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">価格（半角の整数で打ち込む）</label>
      <input type="text" class="form-control" id="" placeholder="4000 や　10000 等" name="price">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">商品説明(それらしい説明を考えて加える)</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="夏にピッタリ！花柄肩出しトップス！
      ヘルシーな肌見せで女性らしいスタイルに！
      幅広いシーンでの活躍間違いなし！"></textarea>
    </div>
    <button type="submit" class="btn btn-success">商品作成</button>
  </form>
</div>

</body>
</html>