<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
</head>
<body>
  @include('components.header')
  {{-- 質問投稿フォーム --}}
  <section>
    <h1>質問投稿フォームはこちら</h1>
    {{-- データベースまだつくってないので、飛ぶ場所適当 --}}
    <form action="/main" method="POST">
      @csrf
      <label for="question-problem">
        1,起きている問題
      </label>
      <textarea placeholder="何を実装したい？" id="question-problem" cols="50" rows="10"></textarea>

      <label for="question-bottleneck">
        2,現状:どこに詰まっている？
      </label>
      <textarea placeholder="なんのエラーが出てる？" id="question-bottleneck" cols="50" rows="10"></textarea>

      <label for="question-copy">
        3,現状：エラーのコピペ
      </label>
      <textarea placeholder="何を実装したい？" id="question-copy" cols="50" rows="10"></textarea>

      <label for="question-effort">
        4,施策：問題を解決するために試したこと・考えたこと
      </label>
      <textarea id="question-effort" cols="50" rows="10"></textarea>

      <label for="question-link">
        5,GitHubのリンクと、自分がいるブランチ名、問題が起きてるファイル名
      </label>
      <input id="question-github-link" placeholder="GitHubのリンク" type="text">
      <input id="question-branch" placeholder="自分のいるブランチ名" type="text">
      <input id="question-file" placeholder="問題が起きてるファイル名" type="text">

      <label for="question-reproduce">
        6,再現手順
      </label>
      <textarea placeholder="（入るコンテナや使用するパスワードなど）" id="question-reproduce" cols="50" rows="10"></textarea>
    </form>
  </section>
</body>
</html>