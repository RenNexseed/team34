$(function() {
  $('#check-info').click(function() {
    // check

    let zip01 = $('#zip01')[0].reportValidity();
    let pref01 = $('#pref01')[0].reportValidity();
    let addr01 = $('#addr01')[0].reportValidity();
    let inputAddress = $('#inputAddress')[0].reportValidity();
    let gridCheck = $('#gridCheck')[0].reportValidity();

    if (zip01 && pref01 && addr01 && inputAddress && gridCheck) {
      // モーダル出す処理
      $('[for="trigger"]').trigger("click");
    }

  })
})
