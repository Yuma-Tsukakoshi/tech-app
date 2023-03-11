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
      <label for="question-problem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        1,起きている問題
      </label>
      <textarea placeholder="何を実装したい？" id="question-problem" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

      <label for="question-bottleneck" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        2,現状:どこに詰まっている？
      </label>
      <textarea placeholder="なんのエラーが出てる？" id="question-bottleneck" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

      <label for="question-copy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        3,現状：エラーのコピペ
      </label>
      <textarea placeholder="何を実装したい？" id="question-copy" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

      <label for="question-effort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        4,施策：問題を解決するために試したこと・考えたこと
      </label>
      <textarea id="question-effort" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

      <div class="mb-6">
        <label for="question-link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          5,GitHubのリンクと、自分がいるブランチ名、問題が起きてるファイル名
        </label>
        <input id="question-github-link" placeholder="GitHubのリンク" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <input id="question-branch" placeholder="自分のいるブランチ名" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <input id="question-file" placeholder="問題が起きてるファイル名" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      </div>
      <label for="question-reproduce" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        6,再現手順
      </label>
      <textarea placeholder="（入るコンテナや使用するパスワードなど）" id="question-reproduce" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
    </form>
  </section>
</body>
</html>