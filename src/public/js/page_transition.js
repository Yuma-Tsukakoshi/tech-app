// メインページ⇒各phのヒント一覧ページに遷移
for(let i=1; i <= 4; i++){
  $(`#transition-ph${i}`).on('click',function(){
    location.href = `http://localhost/main/ph${i}`
  })
}
