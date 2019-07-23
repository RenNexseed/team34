<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Slideshow</title>
  <link rel="stylesheet" href="css/explain.css">
</head>
<body>
  <div class="container">
    <main>
      <img>
    </main>

    <nav>
      <ul>
        <li id="play">Play</li>
        <li id="pause" class="hidden">Pause</li>
        <li id="prev">&lt;</li>
        <li id="next">&gt;</li>

      </ul>
    </nav>

    <ul class="thumbnails"></ul>

    <p><a href="{{ url('home') }}" class="btn btn-primary btn-lg">実際に始めてみる</a></p>
  </div>



  <script src="js/explain.js"></script>
</body>
</html>