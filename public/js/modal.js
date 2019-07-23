$(function() {
  $('#check-info').click(function() {
    // check
    if( $res !== "" ){
      console.log();

      // モーダル出す処理
      $('[for="trigger"]').trigger("click");
    }
  })
})