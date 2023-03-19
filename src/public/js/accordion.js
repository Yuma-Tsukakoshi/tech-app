$(() => {
  // クリックイベントハンドラ
  $(".answer-content-list").hide();
  $(".detail-button").on("click", (e) => {
    const $target = $(e.target);
    // $targetから遡って一番近い.accordionを探す
    const $accordion = $target.closest(".answer-item");
    // $accordionから子要素の.bodyを探す
    const $accordionBody = $accordion.children(".answer-content-list");

    // ボディが可視状態か判定する
    if ($accordionBody.is(":visible")) {
      // 可視状態の場合
      $accordion.removeClass("show");
      $accordionBody.slideUp(150);
    } else {
      // 不可視状態の場合
      $accordion.addClass("show");
      $accordionBody.slideDown(150);
    }
  });
});

// 絞り込みで条件に一致するものにfadeinをあてて、それ以外にfadeoutをあてる

let text_form =document.getElementById('week') ;
text_form.addEventListener('keypress',weekVal);

function weekVal(e){
  if(e.keyCode === 13){
    let weekData = $("#week").val();
    $(".answer-item").filter(
      function(){
        return ($(this).attr('week')==weekData);
      }
    ).fadeIn(500);
    $(".answer-item").filter(
      function(){
        return ($(this).attr('week')!=weekData);
      }
    ).fadeOut(0);
  }
}
