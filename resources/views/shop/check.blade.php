<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お届け先</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <form class="form-inline">
    @csrf
    <div class="form-group">
      <label for="text4c col-sm-2 col-form-label">苗字</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="text4c">
        </div>
    </div>
    <div class="form-group">
      <label for="text4d col-sm-2 col-form-label">名前</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="text4d">
        </div>
    </div>
  </form>
  <form class="form-inline">
    <div class="form-group col-sm-4 mt-5 form-inline">
      <label for="inputZip">郵便番号</label>
        <div class="col-sm-8">
          <input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');">
        </div>
    </div>
  </form>
  <form>
    <div class="form-group col-sm-4 col-form-label">
      <label for="inputState">都道府県</label>
        <div class="col-sm-8">
          <input type="text" name="pref31" size="20">
        </div>
    </div>
    <div class="form-group">
      <label for="inputCity" class="col-sm-4 col-form-label">市区町村</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputCity" name="addr31" size="40">
        </div>
    </div>
  </form>
  <form class="form-inline">
    <div class="form-group col-sm-4 col-form-label">
      <label for="inputAddress">町名・番地</label>
        <div class="col-sm-8">
      <input type="text" class="form-control" id="inputAddress"name="addr01" size="60">
        </div>
  </div>
</form>
<form class="form-inline">
  <div class="form-group col-sm-4 col-form-label">
    <label for="inputAddress2">ビル、マンション名</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="inputAddress2">
      </div>
  </div>
</form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">メールアドレス</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-row">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          確認ボタン
        </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">購入確認ページへ</button>
  <script src="public/js/bootstrap.js"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="public/js/ajaxzip3.js" charset="UTF-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>