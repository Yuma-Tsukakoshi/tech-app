// メインページ⇒各phのヒント一覧ページに遷移
for(let i=1; i <= 4; i++){
  $(`#transition-ph${i}`).on('click',function(){
    location.href = `http://localhost/main/ph${i}`
  })
}

// メインページ⇒質問投稿フォームページに遷移
$("#transition-question").on('click',function(){
  location.href = 'http://localhost/main/question'
})
// 各phのヒント一覧ページ⇒ヒントページ
$("#transition-hint").on('click',function(){
  location.href = 'http://localhost/main/hint'
})

// ヒントページ⇒プロフィール画面に移動
$("#modal-profile").hide();
$("#overlay").hide();
$("#transition-profile").on("click",function(){
  $("#modal-profile").fadeIn(1000);
  $("#overlay").fadeIn(1000);
  $("#overlay").on("click",function(){
    $("#modal-profile").fadeOut(1000);
    $("#overlay").fadeOut(1000);
  })
})



