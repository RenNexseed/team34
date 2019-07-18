$(function () {
  // 親メニュー処理
  // $('span').click(function() {
  //   // メニュー表示/非表示
  //   $(this).next('ul').slideToggle('fast');
  // });

  // 子メニュー処理
  $('li').click(function(e) {
    // メニュー表示/非表示
    $(this).children('ul').slideToggle('fast');
    e.stopPropagation();
  });

  document.getElementById('check22').addEventListener('click', function(e) {
    e.preventDefault
    console.log(444);
  });
});