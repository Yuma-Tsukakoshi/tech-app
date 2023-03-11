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

$("#filter-button").click(function(){
  const weekData = $(this).prev().val();
  // console.log(weekData);
  const targetData = $(".answer-item").filter(
    function(){
      return ($(this).attr('week')==weekData);
    }
  )
})
