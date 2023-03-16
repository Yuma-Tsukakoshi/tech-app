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
$(function(){
  $("#filter-button").on('click',function(e){
    e.stopPropagation();
    e.preventDefault();
    console.log($("#week").val());

  $.ajax({
    // TODO 正規表現で1234いずれかにできるようにする
    url: "http://localhost/main/ph1",
    type: "GET",
    dataType: "JSON",
  }).then(
      function (data){
        console.log(data);
        let weekData = data.week;
        console.log(weekData);
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
      });
  });
});

