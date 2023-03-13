<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TechApp</title>
  @vite('resources/css/app.css')
  <script src="{{asset('/js/jquery-3.6.1.min.js')}}" defer></script>
</head>
<body>
  @include('components.header')
  {{-- 質問投稿フォーム --}}
  <section class="mx-9 my-6">
    <h1 class="mx-9 my-6">質問投稿フォーム</h1>
    <h2 class="mx-9 my-2">{{$msg}}</h2>
    {{-- エラーメッセージてすと --}}
    @if(count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors->all as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    {{-- データベースまだつくってないので、飛ぶ場所適当 --}}
    <form action="/main/question" method="post" id="question-form">
      @csrf
      {{-- 1,起きている問題 --}}
      <div class="qustion-first mx-9 my-6">
        <label for="question-problem" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          1,起きている問題
        </label>
        <textarea placeholder="何を実装したい？" id="question-problem" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-lg" name="problem"></textarea>
      </div>
      {{-- 2,現状:どこに詰まっている？ --}}
      <div class="question-second mx-9 my-6">
        <label for="question-bottleneck" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          2,現状:どこに詰まっている？
        </label>
        <textarea placeholder="なんのエラーが出てる？" id="question-bottleneck" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-lg" name="botttle-neck"></textarea>

      </div>
      {{-- 3,現状：エラーのコピペ --}}
      <div class="question-third mx-9 my-6">
        <label for="question-copy" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          3,現状：エラーのコピペ
        </label>
        <textarea placeholder="何を実装したい？" id="question-copy" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-lg" name="screenshot"></textarea>
      </div>
      {{-- 4,施策：問題を解決するために試したこと・考えたこと --}}
      <div class="qustion-forth mx-9 my-6">
        <label for="question-effort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          4,施策：問題を解決するために試したこと・考えたこと
        </label>
        <textarea id="question-effort" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-lg" name="effort"></textarea>
      </div>
      {{-- 5,GitHubのリンクと、自分がいるブランチ名、問題が起きてるファイル名 --}}
      <div class="qustion-fifth mx-9 my-6">
        <label for="question-link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          5,GitHubのリンクと、自分がいるブランチ名、問題が起きてるファイル名
        </label>
        <input id="question-github-link" placeholder="GitHubのリンク" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2 shadow-lg" name="link">
        <input id="question-branch" placeholder="自分のいるブランチ名" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2 shadow-lg" name="branch">
        <input id="question-file" placeholder="問題が起きてるファイル名" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2 shadow-lg" name="file-name">
      </div>
      {{-- 6,再現手順 --}}
      <div class="question-sixth mx-9 my-6">
        <label for="question-reproduce" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          6,再現手順
        </label>
        <textarea placeholder="（入るコンテナや使用するパスワードなど）" id="question-reproduce" cols="50" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-lg" name="process"></textarea>
      </div>
      {{-- 匿名、実名ボタン --}}
      <div class="mx-9 my-6 flex gap-6 justify-center ">
        <div class="flex items-center">
          <input checked id="default-radio-1" type="radio" value="onymous" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">実名希望</label>
        </div>
        <div class="flex items-center">
          <input id="default-radio-2" type="radio" value="anonymous" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
          <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">匿名希望</label>
        </div>
      </div>
    </form>
    <div class="mx-9 my-6 text-center">
      <button class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-xl" type="submit" form="question-form">投稿</button>
    </div>
  </section>
</body>
</html>